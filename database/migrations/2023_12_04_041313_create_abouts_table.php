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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_short_title')->nullable();  
            $table->string('about_long_title')->nullable();  
            $table->longText('description')->nullable();  
            $table->longText('image')->nullable();  
            $table->string('about_short_title_1')->nullable();  
            $table->string('about_long_title_1')->nullable();  
            $table->longText('description_1')->nullable();               
            $table->longText('image_1')->nullable();  
            $table->string('banner_image')->nullable();  
            $table->string('banner_sub_heading')->nullable();  
            $table->longText('banner_main_heading')->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
