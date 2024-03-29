<?php

namespace App\System\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel.
 *
 * @package namespace App\models;
 */
abstract class BaseModel extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
}
