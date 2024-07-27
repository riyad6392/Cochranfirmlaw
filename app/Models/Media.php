<?php

namespace App\Models;

use App\Trait\ModelAttributeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory, ModelAttributeTrait;
    protected $fillable = [
        'title',
        'video_link',
        'short_description',
        'description',
        'thumbal',
    ];
}
