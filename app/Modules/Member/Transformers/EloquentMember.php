<?php

namespace App\Modules\Member\Transformers;

use Eloquent;

class EloquentMember  extends Eloquent{
	protected $table = 'members';
	protected $fillable = ['cellphone', 'password', 'remember_token', 'created_at', 'updated_at'];
}
