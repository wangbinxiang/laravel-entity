<?php

namespace App\Modules\Member\Entities;

use App\System\Entities\BaseEntity;

/**
 * Class BaseEntity.
 *
 * @package namespace App\System\Entities;
 */
class Member extends BaseEntity
{
    private $id;

    private $name;

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
