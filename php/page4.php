<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get请求参数</title>
    <script>
      /* http协议的常用请求方式：(增删改查)
        get    用来从服务器获取数据(参数一般作为查询条件)
        post   用来添加数据
        put    用来修改数据
        delete 用来删除数据 */
    </script>
</head>
<body>
    <div>测试get获取数据</div>
    <?php
    // http://localhost/php/page4.php?flag=1
    $f = $_GET['flag']; //这里得到url地址传递的参数
    // echo '<span>'.$f.'</span>';
    if($f==1){
        echo "得到数据";
    }else{
        echo "参数错误";
    }
    ?>
</body>
</html>