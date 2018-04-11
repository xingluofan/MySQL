<?php
include_once 'include/conn.php';

if($_POST){
    if(!$_POST['ad_pwd']||($_POST['ad_pwd']!= $_POST['ad_pwd_ag'])){
        die("<script>alert('两次密码不一致');history.back();</script>");
    }

    //加密
    $ra = rand(1000,9999);
    $pwd = md5($_POST['ad_pwd'].$ra);

    //通过验证加入数据库
    $sql = "insert into web_admin(ad_name,ad_pwd,ad_level,ad_salt,timer) values ('$_POST[ad_name]','$pwd','$_POST[ad_level]','$ra',now())";

    $res = mysql_query ($sql,$conn) or die("数据库查询错误:".mysql_errno().'----'.mysql_error());

    if($res){
        die("<script>alert('add success');window.location='right.php'</script>");
    }else{
        die("<script>alert('add fail');history.back();</script>");

    }
}
