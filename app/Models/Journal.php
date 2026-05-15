<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'title',
        'category',
        'excerpt',
        'content',
        'image_url',
        'is_published',
    ];
}
