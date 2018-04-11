<?php
session_start ();
include_once "imgFun.php";
@$conn = mysql_connect ( 'localhost' , 'root' , 'root' );
mysql_select_db ( 'yi' );
mysql_set_charset ( 'utf8' );

if($_POST){
    //如果上传了新头像,就会有file.name
    //如果没有上传新头像就用隐藏域的值做头像
    echo $_FILES['file']['name'];
    if($_FILES['file']['name']){
        $photo = imgFun ('file','images');
    }else{
        $photo = $_POST['filehid'];
    }

    if($_POST['hobby']){
        $hobby = implode ('|',$_POST['hobby']);
    }else{
        $hobby = 'no hobby';
    }


    //更新数据库
    $sql = "update user set username='$_POST[username]',age='$_POST[age]',sex='$_POST[sex]',hobby='$hobby',edu='$_POST[edu]',intro='$_POST[intro]',photo='$photo' where id='$_POST[id]'";

    $res = mysql_query  ($sql,$conn);
    if($res){
        die("<script>alert('change success');window.location='admin_list.php'</script>");
    }else{
        die("<script>alert('change fail');history.back();</script>");
    }
}