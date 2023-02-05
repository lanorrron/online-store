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
        Schema::create('article_color_sizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_color_id');
            $table->unsignedBigInteger('size_id');
            $table->timestamps();

            $table->foreign('article_color_id')->references('id')->on('article_color')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_color_sizes');
    }
};
