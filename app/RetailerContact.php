<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RetailerContact extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'designation', 'apt_ste', 'street_address', 'city', 'email', 'state_id', 'phone_number', 'fax_number', 'zip'
    ];

    /**
	 * Store belongs to State
	 */
    public function state()
    {
    	return $this->belongsTo('App\State');
    }
}
