<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComparesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compares', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('payout')->nullable();
            $table->decimal('irr', 8, 5)->default(1.00);
            $table->decimal('factor', 8, 5)->default(1.00);
            $table->string('logo_path', 2048)->nullable();
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
        Schema::dropIfExists('compares');
    }
}
