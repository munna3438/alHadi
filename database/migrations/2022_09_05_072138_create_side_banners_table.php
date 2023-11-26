<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('side_banners', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->string('title', 150);
            $table->string('banner_img')->nullable();
            $table->string('status', 10)->default('inactive');
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
        Schema::dropIfExists('side_banners');
    }
};
