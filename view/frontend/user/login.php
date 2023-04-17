<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
    <style>
        .info {
            display: none;
        }
    </style>
</head>
<body style="background-image: url('./././public/image/bg-login.jpeg');background-repeat: no-repeat;
background-size: cover;">
    <div class="login" >
        <h1 class="text-center">TOOL GPT 4.0</h1>
        <h2 class="text-center title">ĐĂNG NHẬP</h2>
        <form action="" class="needs-validation" method="post">
            <div class="form-group was-validated">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="username" name="username" id="username" placeholder="username" required>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="password" required>
            </div>
            <input class="btn btn-primary w-100" type="submit" value="LOGIN">
        </form>
    </div>
</body>
</html>