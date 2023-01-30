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
      Schema::table('users', function (Blueprint $table) {
        $table->foreign('user_type_id')->references('id')->on('user_types')->onUpdate('cascade');
      });

      Schema::table('parcels', function (Blueprint $table) {
       $table->foreign('sender_id')->references('id')->on('users')->onUpdate('cascade');
     });

       Schema::table('orders', function (Blueprint $table) {
        $table->foreign('biker_id')->references('id')->on('users')->onUpdate('cascade');
      });

      Schema::table('parcels', function (Blueprint $table) {
       $table->foreign('status_id')->references('id')->on('parcel_statuses')->onUpdate('cascade');
     });

     Schema::table('orders', function (Blueprint $table) {
      $table->foreign('parcel_id')->references('id')->on('parcels')->onUpdate('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
