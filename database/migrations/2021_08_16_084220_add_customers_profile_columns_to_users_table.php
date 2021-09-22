<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomersProfileColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('occupation')->nullable()->after('password');
            $table->string('din_no')->nullable()->after('occupation');
            $table->string('image_path', 2048)->nullable()->after('din_no');
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
            $table->dropColumn('occupation');
            $table->dropColumn('din_no');
            $table->dropColumn('image_path');

        });
    }
}
