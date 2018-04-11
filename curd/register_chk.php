<?php
session_start ();
include_once 'imgFun.php';

@$conn = mysql_connect ( 'localhost' , 'root' , 'root' );//连接数据库
mysql_select_db ( 'yi' );//选择数据库
mysql_set_charset ( 'utf8' );//指定字符集
if ( $_POST ) {
    $name = $_POST[ 'username' ];
    $password = md5($_POST[ 'password' ]);
    $age = $_POST[ 'age' ];
    $sex = $_POST[ 'sex' ];
    $hobby = implode ( '|' , $_POST[ 'hobby' ] );
    $edu = $_POST[ 'edu' ];
    $intro = $_POST[ 'intro' ];
    $timer = date ( 'Y-m-d H:i:s' );
    $photo = imgFun ( 'file' , 'images');

//    die('<script>alert($photo)</script>');

    //验证码
    if ( strtoupper ( $_POST[ 'yzm' ] ) != strtoupper ( $_SESSION[ 'yzm' ] ) ) {
        die( "<script>alert('yzm error');history.back()</script>" );
    }
    //两次密码是否一致
    if ( $_POST[ 'password' ] != $_POST[ 'password_ag' ] ) {
        die( "<script>alert('psd error');history.back()</script>" );
    }

    $spl = "insert into user(username,password,age,sex,hobby,edu,intro,photo,timer) values('$name','$password','$age','$sex','$hobby','$edu','$intro','$photo','$timer')";
    mysql_query ( $spl , $conn );

    die( "<script>alert('success');window.location='login.php'</script>" );
}
