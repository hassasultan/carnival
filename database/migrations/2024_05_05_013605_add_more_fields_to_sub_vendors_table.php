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
        Schema::table('sub_vendors', function (Blueprint $table) {
            $table->string('name')->nullable()->after('vendor_id');
            $table->string('email')->nullable()->after('name');
            $table->string('phone')->nullable()->after('email');
            $table->string('logo')->nullable()->after('phone');
            $table->string('address')->nullable()->after('logo');
            $table->string('insta')->nullable()->after('address');
            $table->string('facebook')->nullable()->after('insta');
            $table->string('youtube')->nullable()->after('facebook');
            $table->string('twitter')->nullable()->after('youtube');
            $table->string('tiktok')->nullable()->after('twitter');
            $table->string('wa_business_page')->nullable()->after('tiktok');
            $table->string('linkedin')->nullable()->after('wa_business_page');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_vendors', function (Blueprint $table) {
            $table->dropColumn(['name', 'email', 'phone', 'logo', 'address', 'insta', 'facebook', 'youtube', 'twitter', 'tiktok', 'wa_business_page', 'linkedin']);
        });
        
    }
};
