<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider2 extends Model
{
    protected $table = 'slider_2';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'slider_id',
        'lang',
        'title',
        'description',
        'image',
        'alt',
        'sort',
    ];

    // If you want to automatically cast created_at as datetime
    protected $dates = [
        'created_at',
        'deleted_at',
    ];

}
