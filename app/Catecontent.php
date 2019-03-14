<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catecontent extends Model
{
    //CC_id	CC_name	CC_alias	CC_status
    protected $table = "catecontent";
	protected $primaryKey = 'CC_id';
	public $fillable = ['CC_id','CC_name','CC_alias','CC_status'];
}
