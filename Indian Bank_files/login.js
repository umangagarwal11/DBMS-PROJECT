var attempt = 0;

function submitform(formT) 
 {  
if(validateForm(formT))
  {
  	if(inAttempt==0)
  	{
  		formT.target = "_top";
  		temp = hex_sha1(formT.uid.value+formT.pwd.value+"IBSKey");
  		formT.pwd.value = hex_sha1(temp+rnumber);
  		formT.submit();
 	}
 	else
 		alert("Already submited...");
 	inAttempt++;
  }
}


function validateForm()
{
	if(!checkText("User ID",document.form1.uid))
	{
		return false;
	}

	if(!checkText("Password",document.form1.pwd))
	{
		return false;
	}
			
	return true;
}

function checkText(ale,alfanumeric)
{
	if(isBlank(alfanumeric.value))
	{
		alert(ale+"  cannot be blank. Enter "+ale);
		alfanumeric.focus();
		alfanumeric.select();
		return false;
	}
	return true;
}

function isBlank(s) 
{
	
	var len =s.length;
	var i;
	if(len==0)
		return true;
  		
	for(i=0;i<len;++i)
	{
		if(s.charAt(i) != " ") 
			return false;	     
	}
	return true;
}