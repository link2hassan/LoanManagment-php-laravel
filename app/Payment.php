<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['amount', 'doner_id'];

     public function doner(){
    	return $this->belongsTo(Doner::class, 'doner_id');
    }
}
