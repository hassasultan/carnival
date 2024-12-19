<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotCarnivalMascampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_carnival_mascamps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carnival_id'); // References the carnivals table
            $table->unsignedBigInteger('mascamp_id'); // References the vendors table
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('carnival_id')
                ->references('id')
                ->on('carnivals')
                ->onDelete('cascade');
            $table->foreign('mascamp_id')
                ->references('id')
                ->on('vendors')
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
        Schema::dropIfExists('pivot_carnival_mascamps');
    }
}
