<?php

namespace App\Models;

use App\Trait\ModelAttributeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaReel extends Model
{
    use HasFactory;
    use HasFactory, ModelAttributeTrait;
//    protected $table = 'media_reels';
    protected $fillable = [
        'title',
        'thumbal',
        'video_link',
    ];

}
