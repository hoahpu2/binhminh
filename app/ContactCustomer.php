<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactCustomer extends Model
{
    protected $table = "contact_customer";
	protected $primaryKey = 'id';
	public $fillable = ['name','company','address','email','number','message'];
}
