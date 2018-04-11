<!doctype html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>登录</title>
</head>
<body>
<a href = "register.php">注册</a>
<hr>
<form action = "login_chk.php" method="post">
    用户名: <input type = "text" name="username"><br>
	密码: <input type = "password" name="password"><br>
	验证码: <input type = "text" name="yzm"><img src = "../PHP/GD/yzm.php" alt = "" onclick = "this.src = this.src + '?num='+ Math.random()">
	<br>
<input type = "submit" value="提交">
</form>
</body>
</html>