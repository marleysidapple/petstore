<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	/**
	 * State has many stores
	 */
    public function store()
    {
    	return $this->hasMany('App/Store');
    }

    /**
	 * State has many retailer contacts
	 */
    public function retailerContacts()
    {
    	return $this->hasMany('App/RetailerContact');
    }
}
