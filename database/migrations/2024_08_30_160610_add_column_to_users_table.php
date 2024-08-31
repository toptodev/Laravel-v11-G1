<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::table('users', function (Blueprint $table) {
      $table->string('username');
      $table->string('prefix')->nullable(); //  คำนำหน้า ตามบัตรประชาชน
      $table->string('fname')->nullable(); // ชื่อ
      $table->string('lname')->nullable(); // น

    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn([
        'username',
        'prefix',
        'fname',
        'lname',
      ]);

    });
  }
};
