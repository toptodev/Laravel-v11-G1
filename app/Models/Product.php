<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
    'images' => Json::class
  ];

  protected function types(): Attribute
  {
    return Attribute::make(
      get: fn(mixed $value) => unserialize($value),
      set: fn(mixed $value) => serialize($value),
    );
  }
}
