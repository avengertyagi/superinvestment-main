<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKycUpdateColumnToKycDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kyc_data', function (Blueprint $table) {
            $table->string('digio_doc_id')->nullable();
            $table->string('txn_id')->nullable();
            $table->dateTime('kyc_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kyc_data', function (Blueprint $table) {
            $table->dropColumn('digio_doc_id');
            $table->dropColumn('txn_id');
            $table->dropColumn('kyc_at');
        });
    }
}
