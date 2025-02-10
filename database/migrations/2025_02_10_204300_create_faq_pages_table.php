<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('faq_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page')->nullable();
            $table->string('question');
            $table->text('answer');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faq_pages');
    }
};
