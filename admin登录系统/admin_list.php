<?php
include_once "include/conn.php";
session_chk($_SESSION['ad_name'],'login.php');


?>
<!doctype html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>Document</title>
</head>
<body>
<table border="1" width="100%">
    <tr>
        <td>编号</td>
        <td>名称</td>
        <td>级别</td>
        <td>时间</td>
        <td>操作</td>
    </tr>
    <?php
    $sql = "select * from web_admin";
    $res = mysql_query($sql,$conn) or die("数据库查询错误:".mysql_errno().'----'.mysql_error());
    while($row = mysql_fetch_assoc($res)){
        ?>
        <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['ad_name'] ?></td>
        <td>
            <?php
            $sql_lv = "select * from web_ad_level where id='$row[ad_level]'";
            $res_lv = mysql_query($sql_lv, $conn) or die("数据库查询错误:" . mysql_errno() . '----' . mysql_error());
            $row_lv = mysql_fetch_assoc($res_lv);
            echo $row_lv['lv_name'];
            ?>
        </td>
        <td><?= $row['timer'] ?></td>
        <td>
            <?php
            if ($row['ad_level'] == 1) {
                ?>
                啥也干不了
                <?php
            } else {
                ?>
                <a href="admin_edit.php?id=<?=$row['id'] ?>">编辑</a>/<a href="admin_del.php?id=<?=$row['id']?>" onclick="return confirm('确认删除?')">删除</a>
                <?php
            }
            ?>
        </td>
    </tr>
        <?php
    }
    ?>

</table>
</body>
</html>