<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\Bakugan $resource
 */
class BakuganResource extends JsonResource
{
    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $bakugan = $this->resource;

        return [
            'attribute' => $bakugan->attribute->label(),
            'name' => $bakugan->name,
            'season' => $bakugan->season->label(),
            'full_name' => $bakugan->full_name,
            'search_query' => $bakugan->img_search_query,
            'search_url' => $bakugan->img_search_url,
        ];
    }
}
