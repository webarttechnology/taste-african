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
        Schema::create('business_listings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('title')->nullable();
             $table->string('approval');
            $table->string('category')->nullable();  
            $table->longText('description')->nullable();  
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();  
            $table->string('state')->nullable();
            $table->string('city')->nullable();  
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();  
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();  
            $table->string('website')->nullable();
            $table->string('status')->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_listings');
    }
};
