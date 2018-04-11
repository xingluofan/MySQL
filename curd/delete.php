<?php
@$conn = mysql_connect ( 'localhost' , 'root' , 'root' );
mysql_select_db ( 'yi' );
mysql_set_charset ( 'utf8' );

if($_GET){
    $sql = "delete from user where id='$_GET[id]'";
    if(mysql_query ($sql)){
        die("<script>alert('success');window.location='admin_list.php'</script>");
    }else{
        die("<script>alert('fail');window.location='admin_list.php'</script>");
    }
}