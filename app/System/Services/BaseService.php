<?php

namespace App\System\Services;

abstract class BaseService implements BaseServiceInterface
{
    /**
     * @var BaseModelRepositoryInterface
     */
    protected $repository;
}
