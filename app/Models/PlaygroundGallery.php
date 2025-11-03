<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Playground;

class PlaygroundGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'playground_gallery';

    protected $fillable = [
        'playground_id',
        'image_id',
        'lang',
        'image',
        'title',
        'description',
        'alt',
        'sort'
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    // Define relationship with Playground model
    public function playground()
    {
        return $this->belongsTo(Playground::class, 'playground_id', 'playground_id');
    }

}
