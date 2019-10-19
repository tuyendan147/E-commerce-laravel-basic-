<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danh_muc extends Model
{
    protected $table ='danh_muc';
	protected $guarded =[];
	
	public function products()
	{
		return $this->hasMany('App\san_pham','id_danhmuc');
	}
}
