<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('CPU',50)->required();
            $table->string('RAM',50)->required();
            $table->string('screen',255)->nullable();
            $table->string('graphics',255)->nullable();
            $table->string('HardDrive',25)->nullable();
            $table->string('OperatingSystem',25)->nullable();
            $table->string('weight',255)->nullable();
            $table->string('size',25)->nullable();
            $table->string('origin',25)->nullable();
            $table->string('DebutYear',25)->nullable();
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
        Schema::dropIfExists('product_details');
    }
}
