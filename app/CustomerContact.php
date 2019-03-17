<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerContact extends Model
{
    protected $table = "customer_contact";
	protected $primaryKey = 'CU_id';
	public $fillable = ['CU_id','CU_name','CU_title','CU_address','CU_phone','CU_email','CU_content','CU_status'];
}
