<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name',200)->required();
            $table->string('image',200)->required();
            $table->string('link',255)->default('#');
            $table->string('description',255)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('prioty')->default(0);
            $table->tinyInteger('sale')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
