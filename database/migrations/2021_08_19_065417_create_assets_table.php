<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('asset_id')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('deal_id');
            $table->integer('investment');
            $table->date('tentative_due_date')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->unique(['user_id','deal_id']);
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
        Schema::dropIfExists('assets');
    }
}
