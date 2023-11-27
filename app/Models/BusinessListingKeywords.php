<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessListingKeywords extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_listing_id',
        'keywords',
        
    ];

    public function listings()
    {
        return $this->belongsTo(BusinessListing::class);
    }
}
