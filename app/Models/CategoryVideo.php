<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryVideo extends Model
{
    use HasFactory;
    
    protected $table = "category_videos";
    protected $fillable = [
        'name',
    ];
}
