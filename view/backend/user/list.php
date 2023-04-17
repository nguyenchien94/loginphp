<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="" style="font-size: 25px; font-weight: bold; font-family: tahoma;">Danh Sách khách hàng</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <table class="table table-hover">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Username</th>
                <th>Họ và Tên</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Vai Trò</th>
                <th>Trạng Thái</th>

            </tr>
        </thead>
        <?php foreach ($items as $row) : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['fullname'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['phone_number'] ?></td>
                    <td><?= $row['role'] ?  'Khách hàng' : 'Nhân viên'?></td>
                    <td><?= $row['status'] ?  'Không có hiệu lực' : 'Có hiệu lực'?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    
    </table>
</form>

</body>
</html>