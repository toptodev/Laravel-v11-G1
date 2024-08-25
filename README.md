# เริ่มกันเลย

## ติดตั้ง Laravel
- 1. after clone
- 2. `composer install`
- 3. `php artisan key:generate`
- 4. `php artisan serve`

### UX & UI Design
- 1. หน้า Home
- 2. หน้าแสดงสินค้าทั้งหมด
- 3. หน้าแสดงรายละเอียดสินค้า
- 4. หน้าตะกร้าของฉัน
- 5. หน้าสรุปรายการสั่งซื้อ
- 6. ทำ validation
- 7. หน้าขอบคุณที่สั่งซื้อสินค้ากับเรา
- 8. หลังบ้าน
	- 1. หน้าเข้าสู่ระบ
	- 2. หน้าแสดงข้อมูลรายการสินค้าทั้งหมด
	- 3. หน้าสร้างรายการสินค้าใหม่
	- 4. หน้าแก้ไขรายการสินค้าใหม่
- 1. Create table: php artisan make:migration create_product_table
- 2. Run: php artisan migrate
- 3. php artisan migrate:rollback --step=1
