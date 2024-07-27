<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PracticeAreas extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'banner_image',
        'content_image',
        'short_description',
        'description',
        'practice_area_type'
    ];
}
