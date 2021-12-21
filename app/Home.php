<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
	protected $table = "product_home";
	protected $primaryKey = 'CA_id';
	public $fillable = ['CA_name','CA_alias','CA_status'];
}
