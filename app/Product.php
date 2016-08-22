<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'name', 'slug', 'universal_product_code', 'regular_price', 'discount_price', 'currency', 'is_discount_active', 'featured_image', 'published_at', 'description', 'ingredients', 'guaranteed_analysis', 'video', 'common_dog_breeds', 'quantity'
	];

	protected $hidden = [ 'id' ];

    public function productGallery()
    {
        return $this->hasMany('App\ProductGallery');
    }

	public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value);
    }
	
    /**
	 * Product has many orders
	 */
    public function orders()
    {
    	return $this->hasMany('App/Order');
    }

    public function getFeaturedImageAttribute($value)
    {
    	if('' == trim($value)) {
    		return '';
    	}

    	return env('BASE_URL_FOR_FILE').$value;
    }


}
