<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('events_country_tab_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('events_country_tab_id')->constrained('events_country_tabs')->onDelete('cascade');
            $table->string('file');
            $table->string('file_type')->nullable(); // e.g., image, video
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events_country_tab_images');
    }
};
