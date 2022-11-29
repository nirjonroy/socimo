<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_pages', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id');
            $table->string('BusinessName');
            $table->string('BusinessSubtitle');
            $table->string('language');
            $table->string('businessCategory');
            $table->string('businessSubCategory');
            $table->text('description');
            $table->tinyInteger('tarms_condition');
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
        Schema::dropIfExists('business_pages');
    }
}
