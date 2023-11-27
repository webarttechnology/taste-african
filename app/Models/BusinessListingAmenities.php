<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessListingAmenities extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_listing_id',
        'amenities',
    ];

   

    public function listings()
    {
        return $this->belongsTo(BusinessListing::class);
    }
}
