<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $fillable = ['name', 'father_name', 'city', 'address', 'cnic', 'phone', 'email', 'bank_num', 'cheque_num', 'bank_branch', 'image', 'cnic_front', 'cnic_back', 'cheque_image', 'description', 'form1', 'form2'];

 public function loans(){
    	return $this->hasMany(Loan::class, 'borrower_id');
    }
}
