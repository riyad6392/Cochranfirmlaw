<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attorneys extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'role',
        'avatar',
        'display_img',
        'about_head_one',
        'about_head_two',
        'bio',
    ];
}
