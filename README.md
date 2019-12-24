# Call-API

## Thêm vào providers trong file app.php tại thư mục config:
+ `TuanHA\CallAPI\CallAPIServiceProvider::class,`

## Chạy command:
+ `php artisan vendor:publish --provider=TuanHA\CallAPI\CallAPIServiceProvider`

## Cần thêm các giá trị vào file env để cấu hình:
+ `API_SERVER = 'http://devapi.dxmb.vn/'` địa chỉ domain của server apigateway
+ `CALL_API = 'api/v1/call'` function call
+ `JWT_SERVICE_LIST_USERS = jwt'` token của app
+ chạy command: `php artisan config:cache` để tải được config mới nhất

##Hướng đẫn sử dụng:
+ Khai báo ở đầu trang: `use TuanHA\CallAPI\Services\BaseAPIServices;`
+ gọi :         `$data = new BaseAPIServices();` để tạo một biến sử dụng class callAPI
+ Dùng các hàm tương ứng để thực hiện các thao tác mong muốn:
+ `$data = $data->all("list_products", 2, []);` lấy toàn bộ danh sách
+ `$data = $data->create("create_products", array $input);` tạo mới bản ghi
+ `$data = $data->show("show_products", $id)` chi tiết bản ghi
+ `$data = $data->update("update_products", array $input, $id)` cập nhật bản ghi
+ `$data = $data->delete("delete_products", $id)` xóa bản ghi
+ `$data = $data->callAPI($url, $method, $headers, $data)` để gọi ra các API khác

