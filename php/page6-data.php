<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成绩</title>
</head>
<body>
    <div>
        <?php
        // 服务器渲染页面
        $arr = array();
        $arr['123'] = array("username" => "张三","Math"=>"98","Chinese"=>"110","English"=>"98");
        $arr['124'] = array("username" => "里斯","Math"=>"90","Chinese"=>"150","English"=>"88");
        $arr['125'] = array("username" => "王五","Math"=>"99","Chinese"=>"130","English"=>"90");
        $arr['126'] = array("username" => "王三","Math"=>"95","Chinese"=>"128","English"=>"95");
        $code = $_POST['code'];
        if($code == 'admin'){
            foreach($arr as $value){
        echo "<ul><li>姓名：$value[username]</li>
        <li>数学：$value[Math]</li>
        <li>语文：$value[Chinese]</li>
        <li>英语：$value[English]</li></ul>";
            }
        }else {
            $score = $arr[$code];
            echo "<ul><li>姓名：$score[username]</li>
    <li>数学：$score[Math]</li>
    <li>语文：$score[Chinese]</li>
    <li>英语：$score[English]</li></ul>";
        }
        
        ?>
    </div>
</body>
</html>