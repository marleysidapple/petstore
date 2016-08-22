<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipTo extends Model
{
    protected $fillable = [
		'company_name',
        'contact_address',
        'phone_number',
        'email',
        'ein_sale_tax',
        'fax_number',
        'shipping_address',
        'billing_address',
        'zip'
	];

	protected $table = 'ship_to';

    public function orderPayment()
    {
        return $this->hasMany('App\OrderPayment');
    }
}
