<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessListing extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'approval',
        'category_id',
        'description',
        'latitude',
        'longitude',
        'state',
        'city',
        'address',
        'zip_code',
        'mobile',
        'email',
        'website',
        'status',
    ];

    public function amenties()
    {
        return $this->hasMany(BusinessListingAmenities::class);
    }

    public function images()
    {
        return $this->hasMany(BusinessListingImages::class);
    }

    public function infos()
    {
        return $this->hasOne(BusinessListingInfo::class);
    }

    public function keywords()
    {
        return $this->hasMany(BusinessListingKeywords::class);
    }

    public function menuitems()
    {
        return $this->hasMany(BusinessListingMenuitems::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
