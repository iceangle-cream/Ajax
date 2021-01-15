<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post参数传递</title>
</head>
<body>
    <?php
     $username = $_POST['username'];
     $pw = $_POST['password'];
      // 设置服务器响应的文件类型
    // header("Content-Type:text/plain; charset=utf-8");
     if($username == 'admin'&& $pw == '123'){
         echo "登录成功";
     }else {
         echo "用户名或者密码错误";
     };
    ?>
</body>
</html>