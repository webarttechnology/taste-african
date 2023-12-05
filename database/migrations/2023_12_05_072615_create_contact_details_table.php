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
        Schema::create('contact_details', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();  
            $table->string('address')->nullable();  
            $table->string('phone')->nullable();  
            $table->string('email')->nullable();  
            $table->string('footer_text')->nullable();  
            $table->string('facebook')->nullable(); 
            $table->string('instragram')->nullable(); 
            $table->string('linkdin')->nullable(); 
            $table->string('youtube')->nullable(); 
            $table->string('twitter')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_details');
    }
};
