<?php

namespace App\Domain\Core\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class TooltipResource
 * @package App\Domain\Core\Resources
 * @mixin \App\Domain\Core\Models\Tooltip
 */
class TooltipResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "key" => $this->key,
            "value" => $this->value,
        ];
    }
}
