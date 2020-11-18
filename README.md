# MVC

Các chứng năng đã hoàn thành:
- Tạo website theo mô hình MVC
- Đăng nhập và tạo tài khoản lưu vào database
- Có thể lưu cookie vào client, và dùng cả session cho đăng nhập
- Kiểm tra đầu nhập vào lọc các password yếu, dễ
- Đã kết nối được giao diện mới vào code
- Mã hoá password theo dạng hash_pass lưu vào DB thay đổi theo dạng khác nhau nên ko dò được bằng cách cracking
- Sử dùng .htaccess rewrite lại URL để dễ xử lý route sau này
- DB class sử dùng singleton pattern
- Session hiện tại nếu k có username, password, mà có cookie thì tự tạo session mới
- Xoá cookie cũ nếu client chỉ có cookie của username hoặc password
- Password lưu ở session được mã hoá sha1
- Sử dụng autoload PSR-4 để load tất cả các file theo cài đặt
- Namespace là MVC
- Có thể thoát đăng nhập và xoá tất cả cookie, sesion cũ