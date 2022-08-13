<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {
            $table->id();
            $table->string('guarantor_name');
            $table->string('guarantor_father_name');
            $table->string('guarantor_city');
            $table->string('guarantor_address');
            $table->string('guarantor_cnic');
            $table->string('guarantor_phone');
            $table->string('guarantor_email');
            $table->string('guarantor_bank_num');
            $table->string('guarantor_cheque_num');
            $table->string('guarantor_bank_branch');
            $table->string('guarantor_image');
            $table->string('guarantor_cnic_front');
            $table->string('guarantor_cnic_back');
            $table->string('guarantor_cheque_image');
            $table->longText('guarantor_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guarantors');
    }
}
