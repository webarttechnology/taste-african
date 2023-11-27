<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessListingImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_listing_id',
        'images',
    ];

    public function listings()
    {
        return $this->belongsTo(BusinessListing::class);
    }
}
