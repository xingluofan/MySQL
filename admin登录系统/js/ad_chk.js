function voidNum(argValue)
{
var flag1=false;
var compStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
var length2=argValue.length;
   for (var iIndex=0; iIndex<length2; iIndex++)
   {
	   	var temp1=compStr.indexOf(argValue.charAt(iIndex));
		if(temp1== -1)
		{
			flag1=false;
			break;
		}else
		{
			flag1=true;
		}
   }
   return flag1;
}
function CheckAdminLogin()
{
  if(!voidNum(document.login.ad_name.value))
  {
	  alert ("��������ȷ���û���");
	  document.login.ad_name.focus();
	  return false;
  }
  if(!voidNum(document.login.ad_pwd.value))
  {
	  alert ("��������ȷ������");
	  document.login.ad_pwd.focus();
	  return false;
  }
  if(!voidNum(document.login.yzm.value))
  {
	  alert ("��������ȷ����֤��");
	  document.login.yzm.focus();
	  return false;
  }
  return true;
}