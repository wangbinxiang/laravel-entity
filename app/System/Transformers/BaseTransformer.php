<?php

namespace App\System\Transformers;

use Illuminate\Database\Eloquent\Model;
use App\System\Entities\BaseEntity;

abstract class BaseTransformer
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    // abstract public function toArray($request);
    // {
    //     return parent::toArray($request);
    // }

    abstract public function toEntity(Model $model): string;
}
