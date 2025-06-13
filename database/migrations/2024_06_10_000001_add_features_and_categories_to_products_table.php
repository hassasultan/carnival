<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('feature')->default(0)->after('id');
            $table->boolean('women')->default(0)->after('feature');
            $table->boolean('men')->default(0)->after('women');
            $table->boolean('kids')->default(0)->after('men');
            $table->boolean('accessories')->default(0)->after('kids');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['feature', 'women', 'men', 'kids', 'accessories']);
        });
    }
}; 