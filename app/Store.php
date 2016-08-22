<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
	use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'store_name', 'slug', 'store', 'suite', 'street_address', 'city', 'email', 'state_id', 'phone_number', 'private_phone_number','website', 'fax_number', 'zip'
    ];

    /**
	 * Store belongs to State
	 */
    public function state()
    {
    	return $this->belongsTo('App\State');
    }
}
