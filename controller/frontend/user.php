<?php
require_once APP_PATH . '/model/user_model.php';
switch ($action) {
    case 'login':
        extract(DangNhap());
        break;
     case 'logout':
        extract(DangXuat());
        break;
    default:
        break;
}
function DangNhap()
{
    $msg = "Hàm đăng nhập";
    if (isset($_POST['username'])) {
        //Lấy dữ liệu khi người dùng bấm nút gửi dạng post

        $msg .= '<br> xin chào ' . $_POST['username'];
        $password = $_POST['password'];
        $userInfo = user_get_one1(['username' => $_POST['username']]);
        if (empty($userInfo))
            $msg = "không tồn tại tài khoản" . $_POST['username'];
        else {
            if ($password == $userInfo['password']) {
                $_SESSION["user"] = $userInfo;
                $msg = "Đăng nhập thành công!";
                header('location:http://localhost/demo-login/index.php');
            } else {
                $msg = "Sai Password";
            }
        }
    }

    return [
        'view_name' => 'user/login.php', 'msg' => $msg

    ];
}

function DangXuat()
{

    session_unset();
    header('?controller=user&action=login');
    if (isset($_SERVER['HTTP_REFERER']))
        header("location: " . $_SERVER['HTTP_REFERER']);
    $username = get_cookie("username");
    $password = get_cookie("password");
    return [
        'view_name' => 'backend/nav.php'

    ];
}

