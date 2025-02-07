<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Voeg de velden toe die je wilt toestaan voor mass assignment
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image_url',
    ];
}
