<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cottage extends Model
{
    /** @use HasFactory<\Database\Factories\CottageFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'location',
        'address',
        'price',
        'image_path',
        'user_id',
        'gallery'
    ];
}
