<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    
    protected $table = 'faq';

    protected $fillable = [
        'category',
        'question',
        'ans',
    ];

    public function selected_category()
    {
        return $this->belongsTo(FaqCategory::class, 'category', 'id');
    }
}
