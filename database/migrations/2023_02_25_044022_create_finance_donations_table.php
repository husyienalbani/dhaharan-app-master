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
        Schema::create('finance_donations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('donation_name');
            $table->integer('donation_nominal');
            $table->text('donation_category');
            $table->text('donation_information');
            $table->date('donation_date');
            $table->string('donation_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_donations');
    }
};
