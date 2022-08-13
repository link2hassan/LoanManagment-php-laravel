<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    protected $fillable = ['borrower_id', 'guarantor_id', 'loan_amount','loan_installments','loan_purpose'];
     public function borrower(){
    	return $this->belongsTo(Borrower::class, 'borrower_id');
    }
    public function guarantor(){
    	return $this->belongsTo(Guarantor::class, 'guarantor_id');
    }
    public function recoveries(){
    	return $this->hasMany(Recovery::class, 'loan_id');
    }
}
