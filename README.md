# MVC

# Các chức năng chính:
- Đăng ký người dùng, phân chia tài khoản admin, user thường.
- Thêm sản phẩm vào giỏ hàng, cập nhật giỏ hàng.
- Hiển thị phân chia danh sách thư mục.
- Hiển thị số tiền, sản phẩm tới trang thanh toán (checkout).
- Xem chi tiết sản phẩm.
- Thêm sửa xoá sản phẩm, chỉnh sửa tiêu đề thư mục, tắt hiển thị thư mục, sản phẩm trong admin.
- Hiển thị các đơn hàng và chi tiết đơn hàng trong admin. 
- 



/* Bắt đầu date 16/11/2020 */
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
- Tự động hide text updated cart sau 3s.

/* Hoàn thành date 22/11/2020 */
- Cập nhất chức năng checkout.
- Fix Sub Category.
- Thu gọn các file hiển thị cho vào blocks header.
- Fix hiển thị giỏ hàng bên trên cùng phải và số tiền.

/* Hoàn thành date 23/11/2020 */
- Đang hoàn thiện chức năng xem sản phẩm chi tiết.

/* Hoàn thành date 25/11/2020 */
- init admin panel

/* Hoàn thành date 25/11/2020 */
- Hiển thị page admin nếu là admin user

/* Hoàn thành date 28/11/2020 */
- Làm trang quản lý sp , hiển thị sp, sửa sp
- jquery update enable/disable product

/* Hoàn thành date 29/11/2020 */
- Thêm danh sách parent category
- Thêm jquery cho thêm thư mục gốc.

/* Hoàn thành date 30/11/2020 */
- Thêm sub category theo category product
- Thêm sp Product

/* Hoàn thành date 04/12/2020 */
- Thêm xoá product

/* Hoàn thành date 08/12/2020 */
- Hoàn thiện chức năng search.

/* Hoàn thành date 10/12/2020 */
- Hoàn thiện chức năng xem đơn hàng, chi tiết đơn hàng.
- Chỉ user admin mới vào được trang admin.



/* MVC Shop by Tâm Lê - Codegym C0920K1 */

