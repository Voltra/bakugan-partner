<?php

namespace App\Models;

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperBakugan
 */
class Bakugan extends Model
{
    use HasFactory;

    protected $table = 'bakugan';

    protected function casts(): array
    {
        return parent::casts() + [
                'attribute' => BakuganAttribute::class,
                'season' => BakuganSeason::class,
            ];
    }

    protected function imgSearchQuery(): Attribute {
        return Attribute::get(fn(): string => "Bakugan {$this->season->label()} {$this->full_name}");
    }

    protected function fullName(): Attribute {
        return Attribute::get(fn(): string => "{$this->attribute->label()} {$this->name}");
    }

    protected function imgSearchUrl(): Attribute {
        return Attribute::get(function(): string {
            $query = $this->img_search_query;
            $query = str_replace(' ', '+', $query);
            return "https://www.google.com/search?q={$query}&udm=2";
        });
    }
}
