<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('user_id');
            $table->text('profile_name')->nullable();
            $table->text('profile_image')->nullable();
            $table->text('name')->nullable();
            $table->text('country')->nullable();
            $table->text('experience')->nullable();
            $table->text('role')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('skills')->nullable();
            $table->text('industry')->nullable();
            $table->text('function')->nullable();
            $table->text('job_type')->nullable();
            $table->text('employment_type')->nullable();
            $table->text('six_days')->nullable();
            $table->text('startup')->nullable();
            $table->text('home_town')->nullable();
            $table->text('gender')->nullable();
            $table->text('marital_status')->nullable();
            $table->text('passport_number')->nullable();
            $table->text('work_permit_usa')->nullable();
            $table->text('address')->nullable();
            $table->text('dob')->nullable();
            $table->text('nationality')->nullable();
            $table->text('languages')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
