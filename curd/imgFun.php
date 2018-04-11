<?php
//仅做图像处理
function imgFun($filename,$filePath,$fileSize=5120000){
    $name = $_FILES[ $filename ][ 'name' ];
    $size = $_FILES[ $filename ][ 'size' ];
    $type = $_FILES[ $filename ][ 'type' ];
    $temp_name = $_FILES[ $filename ][ 'tmp_name' ];
    $error = $_FILES[ $filename ][ 'error' ];
    $arr = array($name,$size,$type,$temp_name,$error);
    print_r ($arr);
    //有错
    if ( $error ) {
        die( "<script>alert('error');history.back()</script>" );
    }
    //过大
    if ( $size > $fileSize ) {
        die( "<script>alert('large');history.back()</script>" );
    }
    //类型不对
    if ( $type != "image/jpeg" && $type != "image/png" && $type != "image/gif" && $type != "image/pjpeg") {
        die( "<script>alert('type error');history.back()</script>" );
    }
    //已存在
    if(file_exists ($filePath.'/'.$name)){
        die( "<script>alert('existed');history.back()</script>" );
    }

    //然后将文件从临时位置移动到指定位置
    //move_uploaded_file ('临时位置','新位置')
    move_uploaded_file ($temp_name,$filePath.'/'.$name);

    //改名
    //1.先把文件格式保存下来
    $tepArr = explode ('.',$name);
    //2.设置新名字
    $newName = date('Ymdhis').rand().'.'.end($tepArr);

    //文件路径
    $path = $filePath.'/'.$newName;

    rename($filePath . '/' . $name,$path);
    return $newName;
}