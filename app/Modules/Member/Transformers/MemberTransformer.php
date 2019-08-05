<?php

namespace App\Modules\Member\Transformers;


use Illuminate\Database\Eloquent\Model;

use App\System\Transformers\BaseTransformer;

use App\Modules\Member\Entities\Member;


class MemberTransformer extends BaseTransformer
{
    public function toEntity(Model $model): Member
    {
        $member = new Member();

        $member->setId($model->id);
        $member->setCellphone($model->cellphone);
        $member->setPassword($model->password);
        $member->setRememberToken($model->remember_token);
        $member->setCreateTime($model->created_at);
        $member->setUpdateTime($model->updated_at);


        return $member;
    }

    public function toEloquent(Member $member)
    {
        $model = EloquentMember::find($member->id);

        $model->fill([
			'cellphone' => $member->getCellphone(),
			'password' => $member->getPassword(),
            'remember_token' => $member->getRememberToken(),
            'created_at' => $member->getCreateTime(),
            'updated_at' => $member->getUpdateTime(),
        ]);

		return $model;
    }
}
