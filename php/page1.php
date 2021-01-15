<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>二维数组</title>
    <script>
    // var arr = [123,456];
    // console.log(arr[0]);
    // console.log(arr[1]);
    // var arr1 = new Array(789,111);
    // console.log(arr1[0]);
    // console.log(arr1[1]);

    // 二维数组（数组的每一项数据还是数组）
    var arr = [];
    arr[0] = [1,2,3];
    arr[1] = [4,5,6];
    arr[2] = [7,8,9];
    arr['hello'] = 'hi';
    console.log(arr.length);
    console.dir(arr);
    for(var i = 0; i < arr.length; i++){
        for(var j = 0; j < arr[i].length; j++) {
            console.log('索引值：' + i+ ',' +j+ '----' +arr[i][j]);
        }
    }
    </script>
</head>
<body>
    <?php
   /*  数组的两组形式 数值数组、关联数组
    1. $arr = array(1,2,3);
    2. $arr = array("a"=>"1","b"=>"2","c"=>"3");
 */
    //$arr1 = array(1,2,3,4,5); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 ) Array ( [0] => hello [1] => hi )
    // $arr2 = array("hello","hi");
    // print_r($arr1);
    // print_r($arr2);
    // echo $arr2[0];
    // echo '<br>';
    // echo $arr2[1];
    // echo '<br>'

    $arr = array("username"=>"zhangsan","age"=>"22","sex"=>"male");
    print_r($arr); // Array ( [username] => zhangsan [age] => 22 [sex] => male )
    echo '<br>';
    echo $arr['username'];
    echo '<br>';
    // var_dump() 函数显示关于一个或多个表达式的结构信息，包括表达式的类型与值。数组将递归展开值，通过缩进显示其结构。
    var_dump($arr); 
    /* array (size=3)
    'username' => string 'zhangsan' (length=8)
    'age' => string '22' (length=2)
    'sex' => string 'male' (length=4) */
    // 二维数组
    /* $arr = array();
    $arr[0] = array(11,22,33);
    $arr[1] = array(44,55,66);
    $arr[3] = array(77,88,99);
    print_r($arr); */
    $arr = array(123);
    $arr['apple'] = array('color'=>'red','shape'=>'round');
    $arr['orange'] = array('color'=>'orange','shape'=>'round');
    $arr['banana'] = array('color'=>'yellow','shape'=>'long');
    print_r($arr);
    //Array ( [0] => 123 [apple] => Array ( [color] => red [shape] => round ) [orange] => Array ( [color] => orange [shape] => round ) [banana] => Array ( [color] => yellow [shape] => long ) )
    ?>
</body>
</html>