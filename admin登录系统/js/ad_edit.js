function voidNum(argValue)
{
var flag1=false;
var compStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
var length2=argValue.length;
   for (var iIndex=0; iIndex<length2; iIndex++)
   {
   var temp1=compStr.indexOf(argValue.charAt(iIndex));
    if (temp1== -1)
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
  if(!voidNum(document.form1.old_pwd.value))
  {
	  alert ("������Ϸ���ԭʼ����");
	  document.form1.old_pwd.focus();
	  return false;
  }
  if(!voidNum(document.form1.ad_pwd.value))
  {
	  alert ("������Ϸ�������");
	  document.form1.ad_pwd.focus();
	  return false;
  }
  if(document.form1.ad_pwd.value!=document.form1.ad_pwd2.value)
  {
	  alert ("�������벻һ��");
	  document.form1.ad_pwd2.focus();
	  return false;
  }
  return true;
}