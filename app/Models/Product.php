<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'code',
    'title',
    'price_actual',
    'price',
    'types',
    'detail',
    'sort',
    'cover',
    'images',
  ];

  protected $casts = [
    'types' => 'array',
    'images' => Json::class
  ];
}
