<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddDipossitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_dipossits', function (Blueprint $table) {
            $table->id();
            $table->string('depossitType');
            $table->string('paymentMethod');
            $table->string('amount');
            $table->string('txId');
            $table->string('txPhoto');
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
        Schema::dropIfExists('add_dipossits');
    }
}
