<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_money', function (Blueprint $table) {
            $table->id();
            $table->integer('form_user_id');
            $table->integer('to_user_id');
            $table->string('from_phone');
            $table->string('from_email');
            $table->string('to_phone');
            $table->string('to_email');
            $table->string('amount');
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
        Schema::dropIfExists('send_money');
    }
}
