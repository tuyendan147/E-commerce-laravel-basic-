<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chi_tiet_don_hang extends Model
{
    protected $table ='chi_tiet_don_hang';
	protected $guarded =[];
	
	public function products()
	{
		return $this->belongsTo('App\don_hang','id_donhang');
	}
}
