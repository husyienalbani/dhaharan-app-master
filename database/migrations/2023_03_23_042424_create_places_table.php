<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id');      
            $table->string('location');
            $table->longText('PlaceInfo');
            $table->string('cover')->nullable();
            $table->foreignId('user_id');
            $table->boolean('is_approved')->default(false);
            $table->timestamps();

            // $table->foreignId('user_id')->constraint("users")->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
