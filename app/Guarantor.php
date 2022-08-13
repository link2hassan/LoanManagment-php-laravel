<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    protected $fillable = ['guarantor_name', 'guarantor_father_name', 'guarantor_city', 'guarantor_address', 'guarantor_cnic', 'guarantor_phone', 'guarantor_email', 'guarantor_bank_num', 'guarantor_cheque_num', 'guarantor_bank_branch', 'guarantor_image', 'guarantor_cnic_front', 'guarantor_cnic_back', 'guarantor_cheque_image', 'guarantor_description'];
    public function loans(){
    	return $this->hasMany(Loan::class, 'guarantor_id');
    }
}
