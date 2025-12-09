<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'category',
        'title',
        'body',
        'deadline_date',
        'is_active',
        'published_at',
    ];

    protected $casts = [
        'deadline_date' => 'date',
        'is_active' => 'boolean',
        'published_at' => 'datetime',
    ];
}
