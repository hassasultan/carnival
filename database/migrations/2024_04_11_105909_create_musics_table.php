<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->string('artiste_name');
            $table->string('real_name');
            $table->string('producer');
            $table->string('writer');
            $table->string('song_title');
            $table->date('release_date');
            $table->string('video')->nullable();
            $table->json('images')->nullable();
            $table->string('music_file');
            $table->string('country');
            $table->string('region');
            $table->string('carnival');
            $table->string('cover_image');
            $table->boolean('show_size_requirement');
            $table->boolean('for_sale');
            $table->decimal('price', 8, 2)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('musics');
    }
}
