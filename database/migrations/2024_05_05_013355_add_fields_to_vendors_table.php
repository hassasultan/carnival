<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToVendorsTable extends Migration
{
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->string('name')->nullable()->after('package_id');
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

    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('logo');
            $table->dropColumn('address');
            $table->dropColumn('insta');
            $table->dropColumn('facebook');
            $table->dropColumn('youtube');
            $table->dropColumn('twitter');
            $table->dropColumn('tiktok');
            $table->dropColumn('wa_business_page');
            $table->dropColumn('linkedin');
        });
    }
}
