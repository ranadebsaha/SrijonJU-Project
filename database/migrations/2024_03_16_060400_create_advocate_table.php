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
        Schema::create('advocate', function (Blueprint $table) {
            $table->id('advocate_id');
            $table->string('name',100);
            $table->string('registration_no',100)->nullable();
            $table->string('enrollment_no',100)->nullable();
            $table->string('gender',50);
            $table->string('dob',50);
            $table->string('contact_no');
            $table->string('pa_contact_no')->nullable();
            $table->string('email');
            $table->string('pa_email')->nullable();
            $table->string('password');
            $table->text('address');
            $table->string('city',50);
            $table->string('state',50);
            $table->string('country',50);
            $table->string('language',100)->nullable();
            $table->string('specialist',100)->nullable();
            $table->string('min_rate',100)->nullable();
            $table->string('max_rate',100)->nullable();
            $table->string('court',200)->nullable();
            $table->string('bio',400)->nullable();
            $table->string('rating',100)->nullable();
            $table->text('solved_case')->nullable();
            $table->text('pending_case')->nullable();
            $table->text('failed_case')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advocate');
    }
};
