<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="info">
        <?php $user = $_SESSION['user']  ?>
        <p class="account">Tài Khoản : <?= $user['username'] ?></p>
        <div class="status">
            <div class="title">Trạng Thái :</div>
            <div class="work"> <?= $user['status'] ?  'Không có hiệu lực' : 'Có hiệu lực'  ?></div>
            <?php
            if ($_SESSION['user']['role'] == 0) {
                ?>
                <a href="<?= BASE_URL ?>/?module=backend" class="admin">Quản trị</a>
                <?php
            }
            ?>
        </div>
        <h4><a href="?controller=user&action=logout" class="title-header">Đăng xuất</a></h4>
    </div>
</body>
</html>