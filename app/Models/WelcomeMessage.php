<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WelcomeMessage extends Model
{
    
    protected $fillable = [
        'name',
        'title',
        'image',
        'description',
        'is_active',
        'no_urut',
        'name_2',
        'title_2',
        'image_2',
        'description_2',
    ];
}
