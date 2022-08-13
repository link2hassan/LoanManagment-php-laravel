<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
	protected $fillable = ['name', 'city', 'phone', 'bank_num','description', 'form_fee'];
	public function payments(){
		return $this->hasMany(Payment::class, 'doner_id','id');
	}
}
