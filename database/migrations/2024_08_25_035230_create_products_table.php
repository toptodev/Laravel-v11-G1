<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('products', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('code')->nullable()->comment('รหัสสินค้า');
      $table->string('title');
      $table->float('price_actual')->nullable()->comment('ราคาจริง');
      $table->float('price')->nullable()->comment('ราคาขาย');
      $table->string('category');
      $table->string('types', 5)->nullable()->comment('ประเภท');
      $table->longText('detail')->nullable()->comment('รายละเอียด');
      $table->integer('sort')->nullable();
      $table->string('cover')->nullable()->comment('ภาพหน้าปก');
      $table->json('images')->nullable()->comment('ภาพประกอบ');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('products');
  }
};
