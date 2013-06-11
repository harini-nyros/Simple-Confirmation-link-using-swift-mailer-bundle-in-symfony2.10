function formvalid()
{

if(document.getElementById("form_username").value =='')
	{
		alert("please enter the username");
		return false;
	}
	if(document.getElementById("form_password").value=='')
	{
		alert("please enter the password");
		return false;

	}
 return true;

}
