<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderPayment extends Model
{
	use SoftDeletes;

    protected $fillable = [
		'payment_id', 'state', 'amount', 'transaction_fee', 'sale_id', 'user_id', 'description', 'ship_to_id'
	];

	protected $hidden = [
		'id'
	];

	public function shipTo()
	{
		return $this->belongsTo('App\ShipTo');
	}
}
