<?php

namespace App\System\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

abstract class BaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    abstract public function toArray($request);
    // {
    //     return parent::toArray($request);
    // }
}
