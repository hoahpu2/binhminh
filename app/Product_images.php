<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_images extends Model
{
    //images
    protected $table = "images";
	protected $primaryKey = 'IM_id';
	public $fillable = ['IM_PR_id','IM_url','created_at','updated_at'];
}
