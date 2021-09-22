<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deal_id');
            $table->longText('profile')->nullable();
            $table->longText('about')->nullable();
            $table->longText('financial')->nullable();
            $table->text('documents')->nullable();
            $table->longText('faq')->nullable();
            $table->timestamps();

            $table->foreign('deal_id')->references('id')->on('deals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deal_details');
    }
}
