<?php
session_start ();

?>
<!doctype html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>Document</title>
</head>
<body>
<h1>注册</h1>
<form action = "register_chk.php" method = "post" enctype="multipart/form-data">
	用户名: <input type = "text" name = "username"><br>
	密码: <input type = "password" name = "password"><br>
	再输入密码: <input type = "password" name = "password_ag"><br>
	年龄: <input type = "text" name = "age"><br>
	性别: <input type = "radio" name = "sex" value = "1">男<input type = "radio" name = "sex" value = "2">女 <br>
	爱好:
	<input type = "checkbox" name = "hobby[]" value = "smoke">smoke
	<input type = "checkbox" name = "hobby[]" value = "drink">drink
	<input type = "checkbox" name = "hobby[]" value = "perm">perm
	<input type = "checkbox" name = "hobby[]" value = "sleep">sleep
	<br>
	学历:
	<select name = "edu" id = "">
		<option value = "primary">primary</option>
		<option value = "junior">junior</option>
		<option value = "senior">senior</option>
		<option value = "university">university</option>
	</select>
	<br>
    	头像:<input type = "file" name = "file">
	<br>
	自我介绍:
	<textarea name = "intro" id = "" cols = "30" rows = "10" name="intro"></textarea>
	<br>
	验证码: <input type = "text" name = "yzm" maxlength = "4">
	<img src = "../PHP/GD/yzm.php" alt = "" onclick = "this.src = this.src + '?num='+ Math.random()">
	<br>
	<input type = "submit" value = "提交" name = "sub">
	<input type = "submit" value = "取消">
</form>
</body>
</html>