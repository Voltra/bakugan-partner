<?php

namespace App\Enums;

enum BakuganSeason: int
{
    case BATTLE_BRAWLERS = 0;
    case NEW_VESTROIA = 1;
    case GUNDALIAN_INVADERS = 2;
    case MECHTANIUM_SURGE = 3;
    case BAKUTECH = 5;

    public function label(): string
    {
        return match ($this) {
            BakuganSeason::BATTLE_BRAWLERS => 'Battle Brawlers',
            BakuganSeason::NEW_VESTROIA => 'New Vestroia',
            BakuganSeason::GUNDALIAN_INVADERS => 'Gundalian Invaders',
            BakuganSeason::MECHTANIUM_SURGE => 'Mechtanium Surge',
            BakuganSeason::BAKUTECH => 'BakuTech',
        };
    }

    /**
     * @return int[]
     */
    public static function values(): array
    {
        return array_map(fn (BakuganSeason $case) => $case->value, self::cases());
    }
}
