<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
  use SoftDeletes;

  protected $table = 'orders';
  protected $fillable = [
    "code",
    "name",
    "email",
    "tel",
    "destination",
    "payment",
    "shipping_cost",
    "amount",
    "items",
    "status",
    "notify",
  ];

  protected $casts = [
    'items' => Json::class,
    'payment' => Json::class,
  ];

  // protected function items(): Attribute
  // {
  //   return Attribute::make(
  //     get: fn(mixed $value) => json_decode($value),
  //     set: fn(mixed $value) => $value,
  //   );
  // }

  protected function cancel(): Attribute
  {
    return Attribute::make(
      get: fn(mixed $value) => !empty($this->deleted_at),
    );
  }

  protected function createdAt(): Attribute
  {
    return Attribute::make(
      get: fn(mixed $value) => date('Y-m-d [H:i:s] A ', strtotime($value))
    );
  }

  protected function updatedAt(): Attribute
  {
    return Attribute::make(
      get: fn(mixed $value) => date('Y-m-d [H:i:s] A ', strtotime($value))
    );
  }
}
