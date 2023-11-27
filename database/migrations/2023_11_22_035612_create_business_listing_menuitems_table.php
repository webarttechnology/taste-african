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
        Schema::create('business_listing_menuitems', function (Blueprint $table) {
            $table->id();
            $table->string('business_listing_id');  
            $table->string('item_name')->nullable();  
            $table->string('category')->nullable();
            $table->string('price')->nullable();  
            $table->longText('about_item')->nullable();
            $table->string('image')->nullable();  
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_listing_menuitems');
    }
};
