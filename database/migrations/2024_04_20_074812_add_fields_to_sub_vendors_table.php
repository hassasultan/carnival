<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToSubVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_vendors', function (Blueprint $table) {
            $table->integer('ecommerce')->default(0)->after('vendor_id');
            $table->integer('events')->default(0)->after('ecommerce');
            $table->integer('music')->default(0)->after('events');
            $table->integer('appointment')->default(0)->after('music');
            $table->integer('ad_space')->default(0)->after('appointment');
            $table->integer('blogging')->default(0)->after('ad_space');
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
            $table->dropColumn(['ecommerce', 'events', 'music', 'appointment', 'ad_space', 'blogging']);
        });
    }
}
