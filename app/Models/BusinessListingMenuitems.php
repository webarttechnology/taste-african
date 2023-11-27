<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessListingMenuitems extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_listing_id',
        'item_name',
        'category',
        'price',
        'about_item',
        'image',
    ];

    public function listings()
    {
        return $this->belongsTo(BusinessListing::class);
    }
}
