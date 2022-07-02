<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('user_id');
            $table->text('profile_id')->nullable();
            $table->text('name')->nullable();
            $table->text('university')->nullable();
            $table->text('duration')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('educational_details');
    }
}
