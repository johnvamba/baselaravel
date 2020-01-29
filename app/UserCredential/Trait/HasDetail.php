<?php

namespace App\UserCredential\Trait;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

trait HasDetail
{
    public function detail()
    {
    	return $this->belongsTo(User::class);
    }

    public function getFullNameAttribute($sequence = 'fl'){
    	$this->loadMissing('detail');

    	$detail = optional($this->detail);

    	switch ($sequence) {
    		case 'lf':
		    	return $detail->last_name . ', ' . $detail->first_name;
    		case 'fm-l':
    			return $detail->first_name . ' ' 
    				. ( $detail->middle_name ? $detail->middle_name . "-" : '') 
    				. $detail->last_name;
    		default:
    			return $detail->first_name . ' ' . $detail->last_name;
    	}
    }
}
