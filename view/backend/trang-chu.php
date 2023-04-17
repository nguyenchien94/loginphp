<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
</head>
<body>

    <h2 style="font-size: 25px; font-weight: bold; font-family: tahoma;text-align: center;">Thông Tin Tài Khoản</h2>
    <table class="mt-5 table table-sm" style="width: 100%;">
        <?php $user = $_SESSION['user']  ?>
        <tbody>
            <tr>
                <th scope="row">ID Của Bạn :</th>
                <th scope="row">username</th>
                <th scope="row">Họ và tên</th>
                <th scope="row">Email</th>
                <th scope="row">SĐT</th>
                <th scope="row">Vai Trò :</th>
                <th scope="row">Trạng Thái :</th>
            </tr>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['fullname'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone_number'] ?></td>
                <td><?= $user['role'] ?  'Khách hàng' : 'Nhân viên'  ?></td>
                <td><?= $user['status'] ?  'Không có hiệu lực' : 'Có hiệu lực'  ?></td>
            </tr>
        </tbody>
    </table>
    
    <a href="?module=backend&controller=user&action=list" class="sidebar-item">
        <i class="fas fa-user-friends sidebar-icon"></i>
        <span class="sidebar-text"> Danh sách Khách Hàng</span>
    </a>
    <a href="?module=backend&controller=comment&action=add" class="sidebar-item">
        <i class="fas fa-user-friends sidebar-icon"></i>
        <span class="sidebar-text"> Thêm mới comment</span>
    </a>
</body>
</html>