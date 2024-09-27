<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\Bakugan $resource
 */
class BakuganResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'attribute' => $this->resource->attribute->label(),
            'name' => $this->resource->name,
            'season' => $this->resource->season->label(),
            'full_name' => $this->resource->full_name,
            'google_url' => $this->resource->img_search_url,
        ];
    }
}
