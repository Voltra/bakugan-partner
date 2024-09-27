<?php

namespace App\Http\Resources;

use App\Models\Bakugan;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BakuganCollectionResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection
            ->map(fn (Bakugan $bakugan) => [
                'attribute' => $bakugan->attribute->value,
                'name' => $bakugan->name,
                'season' => $bakugan->season->value,
                'full_name' => $bakugan->full_name,
                'search_query' => $bakugan->img_search_query,
                'search_url' => $bakugan->img_search_url,
            ])
            ->toArray();
    }
}
