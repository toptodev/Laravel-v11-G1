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
    Schema::create('banners', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->longText('detail')->nullable()->comment('รายละเอียด');
      $table->string('cover')->nullable()->comment('ภาพหน้าปก');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('banners');
  }
};