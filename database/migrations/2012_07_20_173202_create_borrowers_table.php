<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('city');
            $table->string('address');
            $table->string('cnic');
            $table->string('phone');
            $table->string('email');
            $table->string('bank_num');
            $table->string('cheque_num');
            $table->string('bank_branch');
            $table->string('image');
            $table->string('cnic_front');
            $table->string('cnic_back');
            $table->string('cheque_image');
            $table->string('form1');
            $table->string('form2');
            $table->longText('description');
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
        Schema::dropIfExists('borrowers');
    }
}
