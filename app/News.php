<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
	protected $primaryKey = 'N_id';
	public $fillable = ['N_title','N_alias','N_content','N_status','N_avatar'];
}
