<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;

	protected $fillable = [
		'image', 'product_id'
	];

	public function product()
	{
		return $this->belongsTo('App\Product');
	}

	public function getImageAttribute($value)
    {
    	if('' == trim($value)) {
    		return '';
    	}

    	return env('BASE_URL_FOR_FILE').$value;
    }
}
