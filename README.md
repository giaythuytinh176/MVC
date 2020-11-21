# MVC

/* Bắt đầu date 18/11/2020 */

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

/* Hoàn thành date 18/11/2020 */

- Có lưu session_id vào DB
- Có thể chuyển nhiều ngôn ngữ khác . (chưa hoàn thiện tất cả các từ.)
- Cập nhật thêm Category.

/* Hoàn thành date 19/11/2020 */

- Hoàn thiện category , sub category. 
- Cập nhật list danh sách sản phẩm tử DB.

/* Hoàn thành date 20/11/2020 */

- Tạo các header footer cố định vào blocks.
- Tạo giỏ hàng và có thể add sản phẩm vào- lưu vào SESSION.

/* Hoàn thành date 21/11/2020 */

- Cập nhật chức nằng xoá sp ở cart, update theo số lượng.
