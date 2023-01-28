<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("furniture_id");
            $table->unsignedBigInteger("furniture_color_id");
            $table->unsignedBigInteger("furniture_palette_id");
            $table->unsignedBigInteger("furniture_pattern_id");
            $table->unsignedBigInteger("furniture_pattern_color_id");
            $table->unsignedBigInteger("furniture_pattern_palette_id");
            $table->timestamps();

            $table->foreign('furniture_id')->references('id')->on('furniture')
                ->onDelete('cascade');

            $table->foreign('furniture_color_id')->references('id')->on('colors')
                ->onDelete('cascade');

            $table->foreign('furniture_palette_id')->references('id')->on('palettes')
                ->onDelete('cascade');

            $table->foreign('furniture_pattern_id')->references('id')->on('patterns')
                ->onDelete('cascade');

            $table->foreign('furniture_palette_color_id')->references('id')->on('colors')
                ->onDelete('cascade');

            $table->foreign('furniture_pattern_palette_id')->references('id')->on('palettes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
