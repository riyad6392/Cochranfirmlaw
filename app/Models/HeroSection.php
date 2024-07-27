<?php

namespace App\Models;

use App\Trait\ModelAttributeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory,ModelAttributeTrait;
    protected $fillable = [
        'title',
        'sub_title',
        'image',
        'learn_more_link',
        'contact_us_link',
        'created_by',
        'updated_by',
        'is_active',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    protected static function boot()
    {
        parent::boot();
        self::bootCreatedUpdatedBy();
    }
}
