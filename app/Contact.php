<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";
	protected $primaryKey = 'CT_id';
	public $fillable = ['CT_number','CT_address','CT_linkFace','CT_linkYoutu','CT_linkGoogle','CT_Email','created_at','updated_at'];
}
