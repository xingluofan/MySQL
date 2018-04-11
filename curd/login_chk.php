<?php
session_start ();

//首先连接数据库
@$conn = mysql_connect ('localhost','root','root');
mysql_select_db ('yi');
mysql_set_charset ('utf8');

if($_POST){
    if(strtoupper ($_POST['yzm']) != strtoupper ($_SESSION['yzm'])){
        die("<script>alert('yzm error');history.back();</script>");
    }
    $sql = "select username,password from user where username = '$_POST[username]'";
    $res = mysql_query ($sql,$conn);
    if(!res){
        die("<script>alert('name error');history.back()</script>");
    }
//    echo md5 ('admin');

    $row = mysql_fetch_assoc ($res);
    if(md5($_POST['password']) != $row['password']){
        die("<script>alert('psd error');history.back()</script>");
    }
    $_SESSION['username'] = $_POST['username'];
    die("<script>alert('登录成功');window.location='admin_list.php'</script>");
}