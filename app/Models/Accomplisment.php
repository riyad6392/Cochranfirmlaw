<?php

namespace App\Models;

use App\Trait\ModelAttributeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomplisment extends Model
{
    use HasFactory, ModelAttributeTrait;
    protected $fillable = [
        'title',
        'image',
         'video_link',
        'short_description',
        'description',
    ];
}
