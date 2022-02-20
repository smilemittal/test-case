<?php

namespace App\Domain\Core\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CountryResource
 * @package App\Domain\Core\Resources
 * @mixin \App\Domain\Core\Models\Country
 */
class CountryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "flag" => $this->emoji,
            "code" => $this->code,
            "callingcode" => $this->callingcode,
            "currency_name" => $this->currency_name,
            "currency_code" => $this->currency_code,
        ];
    }
}
