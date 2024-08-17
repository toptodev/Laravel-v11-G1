# เริ่มกันเลย

## ติดตั้ง Laravel
- สร้างโปรเจคโดยใช้คำสั่ง `composer create-project laravel/laravel ranprajum`
- รันโปรเจคใช้คำสั่ง `php artisan serve`
- สร้าง Controller ใช้คำสั่ง `php artisan make:controller Product/ProductController -r`
- ดูเส้นทางทั้งหมดในโปรเจคของเราใช้คำสั่ง `php artisan route:list`
- หรือเลือกดูเฉพาะเรื่องใช้คำสั่ง `php artisan route:list --path="product"`
- หากต้องให้แสดง prefix `php artisan route:list -v`
- สร้าง View ใช้คำสั่ง `php artisan make:view products.index` จะใช้ไฟล์ index อยู่ในโฟลเดอร์ products และ View อื่น ๆ ด้วย
  > php artisan make:view products.show
