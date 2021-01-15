<?php
    // 后台接口
    // echo 1;
    // echo 'Welcome to this';
    // header('Content-Type:text/html;charset=utf-8');
    // echo '<div style = "color:red;"><span>测试数据</span><span>测试数据</span></div>'
    // json_encode将数组或者对象转换为字符串
    // $arr = array(123,456,789);
    // $arr = array('color'=>'red','shape'=>'round');
    // $arr = array();
    //     $arr['123'] = array("username" => "张三","Math"=>"98","Chinese"=>"110","English"=>"98");
    //     $arr['124'] = array("username" => "里斯","Math"=>"90","Chinese"=>"150","English"=>"88");
    //     $arr['125'] = array("username" => "王五","Math"=>"99","Chinese"=>"130","English"=>"90");
    //     $arr['126'] = array("username" => "王三","Math"=>"95","Chinese"=>"128","English"=>"95");
    // echo json_encode($arr); // "124":{"username":"\u91cc\u65af","Math":"90","Chinese":"150","English":"88"},
    $f = $_GET['flag'];
    if ($f == 1){
        echo '123';
    }else if($f == 2){
        echo '456';
    }
?>