<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_short_title',
        'about_long_title',
        'description',
        'image',
        'about_short_title_1',
        'about_short_title_1',
        'description_1',
        'image_1',
        'banner_image',
        'banner_sub_heading',
        'banner_main_heading',
    ];
}
