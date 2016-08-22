<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testomonial extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'name',	'title', 'description',	'company', 'company_website', 'image', 'designation'
    ];

    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getImageAttribute($value)
    {
    	if('' != trim($value)) {
    		return env('BASE_URL_FOR_FILE').$value;
    	}
    }
}
