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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name',100);
            $table->string('gender',50);
            $table->string('dob',50);
            $table->string('contact_no');
            $table->string('email');
            $table->string('aadhar_no')->nullable();
            $table->string('password');
            $table->text('address');
            $table->string('city',50);
            $table->string('state',50);
            $table->string('country',50);
            $table->string('case_details',200)->nullable();
            $table->string('language',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
