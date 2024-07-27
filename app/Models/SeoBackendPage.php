<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoBackendPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'head_one',
        'head_two',
        'description',
        'title',
        'slug'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
