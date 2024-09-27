<?php

namespace App\Enums;

use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
enum BakuganAttribute: int
{
    case PYRUS = 0;
    case AQUOS = 1;
    case HAOS = 2;
    case VENTUS = 3;
    case SUBTERRA = 4;
    case DARKUS = 5;
    case ATTRIBUTELESS = 6;

    public function label(): string
    {
        return match ($this) {
            BakuganAttribute::AQUOS => 'Aquos',
            BakuganAttribute::ATTRIBUTELESS => 'Attributeless',
            BakuganAttribute::DARKUS => 'Darkus',
            BakuganAttribute::HAOS => 'Haos',
            BakuganAttribute::PYRUS => 'Pyrus',
            BakuganAttribute::SUBTERRA => 'Subterra',
            BakuganAttribute::VENTUS => 'Ventus',
        };
    }
}
