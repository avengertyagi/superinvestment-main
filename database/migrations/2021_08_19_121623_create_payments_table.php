<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('asset_id');
            $table->string('currency')->nullable();
            $table->string('status')->nullable();
            $table->string('method')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_captured')->nullable();
            $table->string('amount')->nullable();
            $table->string('razor_fee')->nullable();
            $table->string('tax')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('paid_at')->nullable();
            $table->string('payment_id')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
