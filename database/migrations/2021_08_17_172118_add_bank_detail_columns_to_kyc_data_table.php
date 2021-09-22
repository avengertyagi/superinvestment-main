<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBankDetailColumnsToKycDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kyc_data', function (Blueprint $table) {
            $table->string('bank_account_number')->nullable()->after('adhar_back_path');
            $table->string('bank_ifsc_code')->nullable()->after('bank_account_number');
            $table->string('bank_doc_path', 2048)->nullable()->after('bank_ifsc_code');
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
            $table->dropColumn('bank_account_number');
            $table->dropColumn('bank_ifsc_code');
            $table->dropColumn('bank_doc_path');
        });
    }
}
