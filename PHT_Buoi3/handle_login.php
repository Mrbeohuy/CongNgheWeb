<?php
// TODO 1: Khởi động session (TRƯỚC mọi output HTML)
session_start();

// TODO 2: Kiểm tra xem form đã được gửi chưa
// (tức là có tồn tại username trong $_POST hay không)
if (isset($_POST['username']) && isset($_POST['password'])) {

    // TODO 3: Lấy dữ liệu username và password từ $_POST
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // TODO 4: Giả lập kiểm tra đăng nhập
    // Đúng là admin / 123 thì cho đăng nhập
    if ($user == 'admin' && $pass == '123') {

        // TODO 5: Lưu username vào SESSION
        $_SESSION['username'] = $user;

        // TODO 6: Chuyển hướng sang trang chào mừng
        header('Location: welcome.php');
        exit;
    } else {
        // Sai tài khoản/mật khẩu -> quay lại login.html kèm lỗi
        header('Location: login.html?error=1');
        exit;
    }
} else {
    // TODO 7: Nếu truy cập trực tiếp file này (không qua POST)
    // thì đá về lại trang login.html
    header('Location: login.html');
    exit;
}
