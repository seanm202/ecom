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
        Schema::create('customer_supports', function (Blueprint $table) {
            $table->id('customerSupportId');
            $table->string('customerSupportStaffName');
            $table->date('dateOfContactStart')->unique();
            $table->date('dateOfContactEnd')->nullable();
            $table->integer('customerId');
            $table->integer('productId');
            $table->string('descriptionOrIssue');
            $table->integer('status');
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
        Schema::dropIfExists('customer_supports');
    }
};
