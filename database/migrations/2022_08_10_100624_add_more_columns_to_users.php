<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('business_name')->nullable()->after('user_type');
            $table->text('phone_number')->nullable()->after('user_type');
            $table->text('company_logo')->nullable()->after('user_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('business_name');
            $table->dropColumn('phone_number');
            $table->dropColumn('company_logo');
        });
    }
}
