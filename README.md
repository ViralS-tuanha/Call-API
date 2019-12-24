# Call-API

## Thêm vào providers trong file app.php tại thư mục config:
+ TuanHA\CallAPI\CallAPIServiceProvider::class,

## Chạy command:
+ php artisan vendor:publish --provider=TuanHA\CallAPI\CallAPIServiceProvider

##Hướng đẫn sử dụng:
+ Package bao gồm 2 function chính là callAPI và getDataApi
