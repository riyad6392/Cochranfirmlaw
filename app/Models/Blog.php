<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class Blog extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'writen_by',
        'blog_type',
        'image',
        'description',
        'short_description',
        'slug'
    ];

    // public function getRouteKeyName()
    // {
    //     return 'title';
    // }

    protected $append = ['blog_slug'];
    public function getBlogSlugAttribute() {
        // $slug = Str::slug($this->title);
        // dd($slug);
        return Str::slug($this->title);
    }
}
