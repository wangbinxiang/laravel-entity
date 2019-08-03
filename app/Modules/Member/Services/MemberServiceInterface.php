<?php

namespace App\Modules\Member\Services;

use App\Modules\Member\Entities\Member;

use App\System\Services\BaseServiceInterface;


interface MemberServiceInterface extends BaseServiceInterface
{
    public function member(string $id): Member;
}
