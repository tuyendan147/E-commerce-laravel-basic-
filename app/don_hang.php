<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class don_hang extends Model
{
    protected $table ='don_hang';
	protected $guarded =[];
	
	public function products()
	{
		return $this->hasMany('App\chi_tiet_don_hang','id_donhang');
	}
}
