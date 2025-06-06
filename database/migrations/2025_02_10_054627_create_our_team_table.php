<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('our_team', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('skype')->nullable();
            $table->string('google')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('our_team');
    }
};
