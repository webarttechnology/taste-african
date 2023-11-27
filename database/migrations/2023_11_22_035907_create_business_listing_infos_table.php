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
        Schema::create('business_listing_infos', function (Blueprint $table) {
            $table->id();            
            $table->string('business_listing_id');  
            $table->string('monday_opening_time');  
            $table->string('monday_closing_time')->nullable();  
            $table->string('tuesday_opening_time');  
            $table->string('tuesday_closing_time')->nullable(); 
            $table->string('wednesday_opening_time');  
            $table->string('wednesday_closing_time')->nullable(); 
            $table->string('thursday_opening_time');  
            $table->string('thursday_closing_time')->nullable(); 
            $table->string('friday_opening_time');  
            $table->string('friday_closing_time')->nullable(); 
            $table->string('saturday_opening_time');  
            $table->string('saturday_closing_time')->nullable();
            $table->string('sunday_opening_time');  
            $table->string('sunday_closing_time')->nullable(); 
            $table->string('opening_all_time')->nullable();
            $table->string('facebook')->nullable();  
            $table->string('twitter')->nullable();  
            $table->string('instagram')->nullable();  
            $table->string('linkedin')->nullable();  
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_listing_infos');
    }
};
