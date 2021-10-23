<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ship_id');
            $table->float('origin_longtitude');
            $table->float('origin_latitude');
            $table->float('destination_longtitude');
            $table->float('destination_latitude');
            $table->float('distance');
            $table->dateTime('eta', $precision = 0);
            $table->float('price');
            $table->integer('crews');
            $table->timestamps();

            $table->foreign('ship_id')->references('id')->on('ships')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
