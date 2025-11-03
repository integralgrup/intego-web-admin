<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PlaygroundImage;
use App\Models\PlaygroundGallery;


class Playground extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'playground';

    protected $fillable = [
        'playground_id',
        'lang',
        'title',
        'seo_url',
        'image',
        'alt',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sort'
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    // Define relationship with PlaygroundImage model
    public function images()
    {
        return $this->hasMany(PlaygroundImage::class, 'playground_id', 'playground_id')->where('lang', app()->getLocale())->orderBy('sort');
    }

    // You can add other relationships or methods as needed
    public function gallery()
    {
        return $this->hasMany(PlaygroundGallery::class, 'playground_id', 'playground_id')->where('lang', app()->getLocale())->orderBy('sort');
    }


}
