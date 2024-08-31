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

  protected static function boot()
  {
    parent::boot();

    static::creating(function ($model) {
      $prefixYear = date("Y");
      $prefixMonth = date("m");
      $prefixMonth = sprintf("%02d", $prefixMonth);
      $prefixSequent = self::sequent($prefixYear, $prefixMonth)->first();
      $prefixYear = (int)substr($prefixYear + 543, -2);

      $model->code = _genNoIndex("IV{$prefixYear}{$prefixMonth}", (int)$prefixSequent->count, 4);
    });
  }


  function scopeSequent($query, $prefixYear, $prefixMonth)
  {
    return $query->selectRaw('(count(id)+1) as count')
      ->whereRaw("DATE_FORMAT(created_at,'%Y-%m') = '{$prefixYear}-$prefixMonth'")
      ->withTrashed();
  }

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
