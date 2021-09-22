<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->string('logo_path', 2048)->nullable();
            $table->decimal('irr', 8, 5)->default(1.00);
            $table->decimal('pre_tax', 8, 5)->default(1.00);
            $table->decimal('post_tax', 8, 5)->default(1.00);
            $table->decimal('tax', 8, 5)->default(1.00);
            $table->integer('tenure')->nullable();
            $table->string('tenure_type')->nullable();
            $table->integer('min_investment')->nullable();
            $table->integer('total_investment')->nullable();
            $table->integer('investment')->nullable();
            $table->timestamp('completed_at')->nullable();
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
        Schema::dropIfExists('deals');
    }
}
