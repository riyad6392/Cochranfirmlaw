<?php

namespace App\Models;

use App\Trait\ModelAttributeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinions extends Model
{
    use HasFactory, ModelAttributeTrait;
    protected $fillable = [
        'title',
        'image',
        'short_description',
        'description',
    ];


}
