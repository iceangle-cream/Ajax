<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>函数</title>
    <script>
    function foo(info) {
        console.log(info);
        return info;
    }
    var ret = foo('hello');
    console.log(ret);
    </script>
</head>
<body>
    <?php
    // 函数的名字不区分大小写
    // 自定义函数
    $ret = foo('hi Tom');
    echo $ret;
    function Foo($info){
       return $info;
    }
    // 系统函数
    // $arr = array(111,222,333);
    $arr = array("a"=>"111","b"=>"222","c"=>"333"); //{"a":"111","b":"222","c":"333"}
    $ret = json_encode($arr);
    echo $ret;
    ?>
</body>
</html>