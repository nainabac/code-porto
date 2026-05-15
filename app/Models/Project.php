<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'image_url',
        'is_published',
        'client',
        'duration',
        'tech_stack',
        'github_url',
        'pdf_url',
    ];

    protected $casts = [
        'category' => 'array',
        'is_published' => 'boolean',
    ];
}
