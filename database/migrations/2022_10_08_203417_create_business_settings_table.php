<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('headerBackground');
            $table->string('sliderBackground');
            $table->string('categoryBackground');
            $table->string('categorycolor');
            $table->string('brandBackground');
            $table->string('brandcolor');
            $table->string('footerBackground');
            $table->string('footercolor');
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
        Schema::dropIfExists('business_settings');
    }
}
