<?php

namespace App\Auth;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider as Provider;

class EntityProvider implements Provider
{
    /**
     * The Eloquent user model.
     *
     * @var string
     */
    protected $transformer;


    public function __construct(HasherContract $hasher, $model, $transformer)
    {
        parent::__construct($hasher, $model);

        $this->transformer = $transformer;
    }


    public function retrieveById($identifier)
    {
        $model = parent::retrieveById($identifier);

        if ($model) {
            return $this->transformer->toEntity($model);
        }
    }
}
