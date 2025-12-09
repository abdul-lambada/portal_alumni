<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'quote',
        'body',
        'person_name',
        'person_title',
        'bg_image',
        'video_title',
        'video_url',
        'video_description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
