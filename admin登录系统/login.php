<?php
session_start ();

@$conn = mysql_connect ( 'localhost' , 'root' , 'root' );
mysql_select_db ( 'yi' );
mysql_set_charset ( 'utf8' );
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>企业信息管理系统_用户登录</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #016aa9;
	overflow:hidden;
}
.STYLE1 {
	color: #000000;
	font-size: 12px;
}
-->
</style>
<script type="text/javascript" src="js/ad_chk.js">
</script>
</head>

<body>
<form name="login" method="post" action="login_chk.php">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="962" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="235" background="images/login_03.gif">&nbsp;</td>
      </tr>
      <tr>
        <td>
		
		<table width="962" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="394" height="53" background="images/login_05.gif">&nbsp;</td>
            <td width="206" background="images/login_06.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="16%" height="25"><span class="STYLE1">用户:</span></td>
                  <td width="57%" height="25"><input type="text" name="ad_name" style="width:105px; height:16px; background-color:#292929; border:solid 1px #7dbad7; font-size:12px; color:#6cd0ff"></td>
                  <td width="27%" rowspan="2">
				  			 </td>
                </tr>
                <tr>
                  <td height="25"><span class="STYLE1">密码</span></td>
                  <td height="25"><input type="password" name="ad_pwd" style="width:105px; height:16px; background-color:#292929; border:solid 1px #7dbad7; font-size:12px; color:#6cd0ff"></td>
                </tr>
            </table></td>
            <td width="362" background="images/login_07.gif">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="41" valign="top" background="images/login_08_1.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="394">&nbsp;</td>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              
              <tr>
                <td width="16%" height="25"><span class="STYLE1">验证:</span></td>
                <td width="20%" height="25" align="left"><input name="yzm" type="text" style="width:32px; height:16px; background-color:#292929; border:solid 1px #7dbad7; font-size:12px; color:#6cd0ff" maxlength="4"></td>
                <td width="37%" align="left">
				<!--2 将验证码导入文件中-->
				<img src="../include/yzm.php" alt="看不清?请点击" onClick="this.src=this.src+'?num='+Math.random()" width="75" height="20">
				</td>
                <td width="27%" height="25">
				<input type="image" name="imageField" src="images/dl.gif"></td>
              </tr>
            </table>
			
			</td>
            <td width="362">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="172" background="images/login_08_2.gif">&nbsp;</td>
      </tr>  
    </table></td>
  </tr>
</table>
</form>
</body>
</html>