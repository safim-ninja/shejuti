<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    protected $fillable = [
        'title',
        'description',
        'published_at',
        'topic',
        'link',
    ];
}
