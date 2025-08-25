# Hướng dẫn khởi tạo dự án Laravel

## 1. Tạo dự án Laravel mới
```sh
laravel new Tên_dự_án
```
- Chọn `react` Khi muốn sử dụng giao diện của React
- Chọn `none` Nếu không muốn cài thêm tính năng xác thực
- Chọn `1` 
- Chọn `yes` để chạy `npm install` và `npm build` tự động

## 3. Cấu hình môi trường
- Sửa thông tin database trong file `.env `:
```
DB_DATABASE=ten_db
DB_USERNAME=ten_user
DB_PASSWORD=mat_khau
```

## 4. Khởi tạo database
- Chạy migrate để tạo bảng mặc định:
```sh
php artisan migrate
```

## 5. Sửa TypeScripts thành React
- Sửa trong file `resources/js/ssr.tsx` các đuôi `.tsx` thành `.jsx`
- Tương tự cho file `resources/js/app.tsx`

## 6. Tạo model, migration, controller
```sh
php artisan make:model Tên_Model -m
php artisan make:controller Tên_Controller
```
## 7. Đăng ký route
- Sửa file `routes/web.php` để thêm route cho controller.

## 8. Viết logic và views
- Viết logic trong controller.
- Viết UI bằng cách tạo `component` trong `resources/js/pages`.

