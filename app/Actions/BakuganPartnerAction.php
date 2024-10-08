<?php

namespace App\Actions;

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
use App\Models\Bakugan;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class BakuganPartnerAction
{
    public const CALIBRATION_KEY = 239970; //NOTE: DO NOT TOUCH UNDER ANY CIRCUMSTANCES

    public function __invoke(Carbon $birthday): Bakugan
    {
        $randomSeed = $birthday->getTimestampMs() + static::CALIBRATION_KEY;

        return Cache::rememberForever($randomSeed, function () use ($birthday, $randomSeed) {
            srand($randomSeed);
            mt_srand($randomSeed);

            $season = $this->pickSeason($birthday);
            $attribute = $this->pickAttribute($birthday, $season);

            return $this->pickPartner($birthday, $season, $attribute);
        });
    }

    protected function pickSeason(Carbon $birthday): BakuganSeason
    {
        $seasons = BakuganSeason::cases();
        shuffle($seasons);
        $seasonsCount = count($seasons);

        $seasonIndex = ($birthday->year + 1) % $seasonsCount;

        return $seasons[$seasonIndex];
    }

    protected function pickAttribute(Carbon $birthday, BakuganSeason $season): BakuganAttribute
    {
        // We want the attributes that are available in this season.
        // We do this for two reasons:
        //  - Attributeless are not in every season
        //  - Some season might not feature a given attribute from some reason
        $attributes = Cache::rememberForever("attributes-for-{$season->name}", fn () => Bakugan::whereSeason($season)
            ->distinct()
            ->pluck('attribute')
            ->sortBy('value')
            ->toArray());

        shuffle($attributes);
        $attributesCount = count($attributes);

        $attributeIndex = ($birthday->month + 1) % $attributesCount;

        return $attributes[$attributeIndex];
    }

    protected function pickPartner(Carbon $birthday, BakuganSeason $season, BakuganAttribute $attribute): Bakugan
    {
        $bakugans = Cache::rememberForever(
            "bakugans-in-{$season->name}-for-{$attribute->name}",
            fn () => Bakugan::query()
                ->where('season', $season->value)
                ->where('attribute', $attribute->value)
                ->orderBy('name')
                ->getModels(),
        );

        shuffle($bakugans);

        $bakugansCount = count($bakugans);

        if ($bakugansCount <= 2) {
            return $bakugans[0];
        }

        $bakuganIndex = ($birthday->day + 1) % $bakugansCount;

        return $bakugans[$bakuganIndex];
    }
}
