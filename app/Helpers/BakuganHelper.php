<?php

namespace App\Helpers;

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
use App\Models\Bakugan;

class BakuganHelper
{
    public function __construct(
        protected BakuganSeason $bakuganSeason
    ) {}

    public function dataFor(string $name, BakuganAttribute $attribute): array
    {
        return [
            'name' => $name,
            'attribute' => $attribute,
            'season' => $this->bakuganSeason,
        ];
    }

    /**
     * @param  BakuganAttribute[]  $attributes
     */
    public function dataForMany(string $name, array $attributes): array
    {
        return array_map(fn (BakuganAttribute $attribute) => $this->dataFor($name, $attribute), $attributes);
    }

    public function make(string $name, BakuganAttribute $attribute): Bakugan
    {
        $data = $this->dataFor($name, $attribute);

        return new Bakugan($data);
    }

    /**
     * @param  BakuganAttribute[]  $attributes
     */
    public function makeMany(string $name, array $attributes): array
    {
        return array_map(fn (BakuganAttribute $attribute) => $this->make($name, $attribute), $attributes);
    }
}
