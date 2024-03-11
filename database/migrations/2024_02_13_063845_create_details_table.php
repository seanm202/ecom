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
        Schema::create('details', function (Blueprint $table) {
            $table->id('detailId');
            $table->integer('userId');
            $table->string('firstName')->unique();
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->integer('CountryId');
            $table->string('Address')->unique();
            $table->integer('contactNumber')->nullable();
            $table->integer('alternateContactNumber');
            $table->integer('whatsApp');
            $table->rememberToken();
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
        Schema::dropIfExists('details');
    }
};
