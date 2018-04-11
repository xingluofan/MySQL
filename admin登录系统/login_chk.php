<?php
session_start ();

//首先连接数据库
@$conn = mysql_connect ('localhost','root','root');
mysql_select_db ('yi');
mysql_set_charset ('utf8');

header ("content-type:text/html;charset=utf8");
if($_POST){
    if(strtoupper ($_POST['yzm']) != strtoupper ($_SESSION['yzm'])){
        die("<script>alert('yzm error');history.back();</script>");
    }
    $sql = "select ad_name,ad_pwd from user where ad_name = '$_POST[ad_name]'";
    $res = mysql_query ($sql,$conn);
    if(!res){
        die("<script>alert('name error');history.back()</script>");
    }
    echo md5 ('admin');

    $row = mysql_fetch_assoc ($res);

    if(md5($_POST['ad_pwd']) != $row['ad_pwd']){
//        die("<script>alert('psd error');history.back()</script>");
    }
    $_SESSION['ad_name'] = $_POST['ad_name'];
    die("<script>alert('登录成功');window.location='main.php'</script>");
}