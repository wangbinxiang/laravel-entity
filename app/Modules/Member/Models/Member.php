<?php

namespace App\Modules\Member\Models;

use App\System\models\BaseModel;

/**
 * Class BaseModel.
 *
 * @package namespace App\models;
 */
class Member extends BaseModel
{

    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'member_members';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
}
