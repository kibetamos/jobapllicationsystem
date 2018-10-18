function validate(userform) {
    div=document.getElementById("emailmsg");
	div.style.color="red";
	if (div.hasChildNodes()) 
		{
			div.removeChild(div.firstChild);
		}
		regex=/(^\w+\@\w+\.\w+)/;
		match=regex.exec(userform.emailaddress.value);
		if (!match) 
			{
				div.appendChild(document.createTextnode("Invalid Email"));
				userform.emailaddress.focus();
				return false;
			}
			div=document.getElementById("passwdmsg");
			div.style.color="red";
			if (div.hasChildNodes()) 
				{
					div.removeChild(div.firstChild);
				}
				if (userform.password.value.length <=5) 
					{
						div.appendChild(document.createTextnode("The password should have at least 6 characters"));
						userform.password.focus();
						return false;
					}
					div=document.getElementById("repasswdmsg");
					div.style.color="red";
					if (div.hasChildNodes()) 
						{
							div.removeChild(div.firstChild);
						}
						if (userform.password.value != userform.repassword.value) 
							{
								div.appendChild(document.createTextnode("The two passwords do not match!"));
								userform.password.focus();
								return false;
							}
							var div=document.getElementById("category");
							div.style.color="red";
							if (div.hasChildNodes()) 
								{
									div.removeChild(div.firstChild);
								}
								if (userform.complete_name.value.length ==0) 
									{
										div.appendChild(document.createTextnode("Name cannot be blank!"));
										userform.complete_name.focus();
										return false;
									}
									return false;
}