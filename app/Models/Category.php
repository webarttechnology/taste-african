<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function listings()
    {
        return $this->hasMany(BusinessListing::class);
    }
    
    public function approvedListings()
    {
        return $this->hasMany(BusinessListing::class)->where('status', 'approve');
    }
}
