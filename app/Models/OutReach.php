<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OutReach extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'posted_by',
        'image',
        'description',
        'short_description',
        'redirect_site_url',
    ];
}
