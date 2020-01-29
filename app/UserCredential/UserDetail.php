<?php

namespace App\UserCredential;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
		'first_name',
		'middle_name',
		'last_name',
		'suffix',
		'civil_status',
		'phone'
    ];
}
