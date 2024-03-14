<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="form">
        @csrf
        <ul>
            <input type="text" name="name" placeholder="Tài khoản">
            <input type="password" name="password" placeholder="Mật khẩu">
            <input type="submit">
        </ul>
    </form>
</body>
</html>