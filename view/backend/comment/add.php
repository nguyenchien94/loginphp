<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo @$msg; ?>
<form action="" class="form-group" method="post" enctype="multipart/form-data">
    <div class="">
        <div class="">
            <input type="hidden" class="form-control" id="" name="id_cmt" value="auto_number" readonly>
        </div>

        <div class="">
            <label for="">Nội dung: </label><br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <?= (isset($err['description']) ? $err['description'] : '') ?>
        </div>
    </div>
    <div class="text-center mt-4">
        <div>
            <button class="btn btn-primary" name="btnSave">Thêm mới</button>
            <a href="<?= BASE_URL ?>/?module=backend">Quản trị</a>  
        </div>
    </div>
</form>
</body>
</html>