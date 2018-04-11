<?php
session_start ();
@$conn = mysql_connect('localhost','root','root');
mysql_select_db('yi');
mysql_set_charset('utf8');

function session_chk ($name,$url){
    if(!$name){

        die("<script>window.location='$url'</script>");

    }
};