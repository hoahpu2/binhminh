<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";
	protected $primaryKey = 'SL_id';
	public $fillable = ['SL_url','SL_status','created_at','updated_at'];
}
