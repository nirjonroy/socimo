<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickName');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('profilePhoto')->nullable();
            $table->string('coverPhoto')->nullable();
            $table->string('occupation')->nullable();
            $table->string('school')->nullable();
            $table->string('college')->nullable();
            $table->string('university')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instragram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsApp')->nullable();
            $table->string('linkedin')->nullable();
            $table->date('DOB')->nullable();
            $table->string('religion')->nullable();
            $table->string('relationship_status')->nullable();
            $table->string('role')->default(2);
            $table->string('status_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verification_code')->nullable();
            $table->integer('is_verified')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('failed_jobs');
    }
}
