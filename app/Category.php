<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const CATE_URL = 'list-all/';
	protected $table = "category";
	protected $primaryKey = 'CA_id';
	public $fillable = ['CA_name','CA_alias','CA_status','CA_parentId','CA_number'];
}
