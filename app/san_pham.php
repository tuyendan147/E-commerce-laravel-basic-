<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class san_pham extends Model
{
    protected $table ='san_pham';
	protected $guarded =[];
	
	public function products()
	{
		return $this->belongsTo('App\Products','id_danhmuc');
	}
}
