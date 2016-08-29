<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Store;

class State extends Model
{
	/**
	 * State has many stores
	 */
    public function stores()
    {
    	return $this->hasMany('App\Store');
    }

    /**
	 * State has many retailer contacts
	 */
    public function retailerContacts()
    {
    	return $this->hasMany('App\RetailerContact');
    }
}
