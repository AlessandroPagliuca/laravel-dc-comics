<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('thumb');
            $table->string('price');
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('comic_artists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comic_id');
            $table->string('artist');
            $table->timestamps();

            $table->foreign('comic_id')->references('id')->on('comics')->onDelete('cascade');
        });

        Schema::create('comic_writers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comic_id');
            $table->string('writer');
            $table->timestamps();

            $table->foreign('comic_id')->references('id')->on('comics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
        Schema::dropIfExists('comic_artists');
        Schema::dropIfExists('comic_writers');
    }
};