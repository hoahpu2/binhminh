<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
	protected $primaryKey = 'PR_id';
	public $fillable = ['PR_CA_id','PR_CC_id','PR_name','PR_alias','PR_content','PR_price','PR_quantity','PR_SKU','PR_avatar','PR_sortDesc','PR_sale','PR_view','PR_numberBuy','PR_producer','PR_status','created_at','updated_at'];
}
