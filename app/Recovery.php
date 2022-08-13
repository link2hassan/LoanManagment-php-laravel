<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recovery extends Model
{
    //
    protected $fillable = ['recover_amount', 'loan_id'];

    public function loan(){
    	return $this->belongsTo(Loan::class, 'loan_id');
    }
}
