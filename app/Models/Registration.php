<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'category_reg',
        'wilayah_reg',
        'title',
        'early_bird_reg',
        'normal_reg',
        'onsite_reg',
        'is_Active',
        'date_early_bird',
        'date_normal_reg',
        'date_onsite',
        'subtitle',
        'description',
        'url_earlybird',
        'url_regular',
        'url_onsite',
        'discount_early',
        'discount_normal',
        'discount_onsite',
    ];
}
