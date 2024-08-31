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
        Schema::create('orders', function (Blueprint $table) {
          $table->charset = 'utf8';
          $table->collation = 'utf8_unicode_ci';

          $table->bigIncrements('id');
          $table->string('code')->nullable();
          $table->string('name')->nullable();
          $table->string('tel')->nullable();
          $table->string('email')->nullable();
          $table->longText('items')->nullable()->comment('รายละเอียดการสั่งซื้อ');
          $table->text('destination')->nullable()->comment('ที่อยู่จัดส่งสินค้า');
          $table->float('shipping_cost')->nullable()->comment('ค่าจัดส่ง');
          $table->float('amount')->nullable();
          $table->text('payment')->nullable()->comment('ข้อมูลการเลือกชำระเงิน');
          $table->tinyInteger('status')->nullable()->default('1')->comment('สถานะการสั่งซื้อ');
          $table->text('notify')->nullable()->comment('แจ้งชำระเงิน');

          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
