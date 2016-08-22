<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'quantity', 'price', 'currency', 'payer_id', 'order_payment_id', 'product_id', 'is_complete'
	];
	
    /**
	 * Order belongs to Product
	 */
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }

    public function orderPayment()
    {
    	return $this->belongsTo('App\OrderPayment');
    }
}
