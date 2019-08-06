<?php

namespace App\Modules\Member\Transformers;


use Illuminate\Database\Eloquent\Model;

use App\System\Transformers\BaseTransformer;

use App\Modules\Member\Entities\Member;


class MemberTransformer extends BaseTransformer
{

    public static $id = 'id';
    public static $cellphone = 'cellphone';
    public static $password = 'password';
    public static $rememberToken = 'rememberToken';
    public static $createTime = 'createTime';
    public static $updateTime = 'updateTime';

    private static $mapping = null;


    /**
     * 生成实体类
     */
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

    /**
     * 模型属性和数据库字段映射
     */
    private static function mapping(): array
    {
        if (self::$mapping == null) {
            self::$mapping = [
                self::$id => 'id',
                self::$cellphone => 'cellphone',
                self::$password => 'password',
                self::$rememberToken => 'remember_token',
                self::$createTime => 'created_at',
                self::$updateTime => 'updated_at',
            ];
        }
        return self::$mapping;
    }

    /**
     * model to array
     */
    public function toArray(Member $member, array $keys = array()): array
    {

        $mapping = self::mapping();
        $result = [];

        if (empty($keys)) {
            foreach ($keys as $val) {
                if (in_array($val, $mapping)) {
                    $fieldName = $mapping[$val];
                    $method = self::makeGet($val);
                    $result[$fieldName] = $member->$method();
                }
            }
        } else {
            foreach ($mapping as $key => $val) {
                $fieldName = $val;
                $method = self::makeGet($key);
                $result[$fieldName] = $member->$method();
            }
        }
        return $result;
    }

    /**
     * model property to array field
     */
    public function toField(string $property): string
    {
        $mapping = self::mapping();
        return $mapping[$property];
    }

    // public function toEloquent(Member $member)
    // {
    //     $model = EloquentMember::find($member->id);

    //     $model->fill([
    //         'cellphone' => $member->getCellphone(),
    //         'password' => $member->getPassword(),
    //         'remember_token' => $member->getRememberToken(),
    //         'created_at' => $member->getCreateTime(),
    //         'updated_at' => $member->getUpdateTime(),
    //     ]);

    //     return $model;
    // }


    private static function makeGet(string $property): string
    {
        return 'get' . ucfirst($property);
    }
}
