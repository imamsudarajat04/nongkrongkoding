<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    protected $table = "videos";

    protected $fillable = [
        'name',
        'image',
        'thumbnail',
        'description',
        'linkYoutube',
        'categoryvideo_id',
        'price'
    ];

    public function categoryVideo()
    {
        return $this->belongsTo(CategoryVideo::class, 'id', 'categoryvideo_id');
    }
}
