<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <div class="info">
    <?php if (!isset($_SESSION['user'])) {
                require_once "nav.php";
            } else {
                require_once "navigation.php";
            } ?>
        </div>
        <div class="container">
            <?php require_once APP_PATH . '/view/' . $module . '/' . $view_name; ?>
        </div>
        
</body>
</html>