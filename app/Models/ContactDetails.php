<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
         'site_name',
        'address',
        'phone',
        'email',
        'footer_text',
        'facebook',
        'instragram',
        'linkdin',
        'youtube',
        'twitter',
    ];
}
