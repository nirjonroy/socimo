<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_banks', function (Blueprint $table) {
            $table->id();
            $table->string('accountHolder');
            $table->string('sortCode');
            $table->string('accountNumber');
            $table->string('IBAN');
            $table->string('country');
            $table->string('refference');
            $table->string('accountBalance');
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
        Schema::dropIfExists('add_banks');
    }
}
