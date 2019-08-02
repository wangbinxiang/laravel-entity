<?php

namespace App\Modules\Member\Transformers;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Member\Entities\Member;

class MemberTransformer
{
    public function toEntity(Model $model): Member
    {
        $member = new Member();

        $member->setId($model->id);
        $member->setName($model->name);


        return $member;
    }
}
