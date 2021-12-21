<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = "logo";
	protected $primaryKey = 'SL_id';
	public $fillable = ['SL_url','SL_status','created_at','updated_at'];
}
