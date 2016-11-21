		function CheckUsername(str)
		{
			var xmlhttp1;
			xmlhttp1 = new XMLHttpRequest();
			if (str.length == 0)
			{
				document.getElementById('unameinfo').innerHTML = "Please input the username";
				return;
			}
			xmlhttp1.onreadystatechange = function()
			{
				if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
    			{
    				document.getElementById("unameinfo").innerHTML=xmlhttp1.responseText;
    			}
    		}
    		xmlhttp1.open("POST","./php/checkuname.php",true);
    		xmlhttp1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp1.send("username="+str);
		}
		function CheckPassword(str)
		{
			var xmlhttp2;
			xmlhttp2 = new XMLHttpRequest();
			if (str.length == 0)
			{
				document.getElementById('pswdinfo').innerHTML = "Please input the password";
				return;
			}
			xmlhttp2.onreadystatechange = function()
			{
				if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
    			{
    				document.getElementById("pswdinfo").innerHTML=xmlhttp2.responseText;
    			}
    		}
    		xmlhttp2.open("POST","./php/checkpswd.php",true);
    		xmlhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp2.send("password="+str);
		}
		function CheckPasswordConfirm(str)
		{
			var xmlhttp3;
			strx = document.getElementById("password").value;
			xmlhttp3 = new XMLHttpRequest();
			if (str.length == 0)
			{
				document.getElementById('cpswdinfo').innerHTML = "Please input the confirm password";
				return;
			}
			xmlhttp3.onreadystatechange = function()
			{
				if (xmlhttp3.readyState==4 && xmlhttp3.status==200)
    			{
    				document.getElementById("cpswdinfo").innerHTML=xmlhttp3.responseText;
    			}
    		}
    		xmlhttp3.open("POST","./php/checkpswdc.php",true);
    		xmlhttp3.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp3.send("passwordc="+str+"&password="+strx);
		}
		function CheckEmail(str)
		{
			var xmlhttp4;
			xmlhttp4 = new XMLHttpRequest();
			if (str.length == 0)
			{
				document.getElementById('emailinfo').innerHTML = "Please input the E-mail address";
				return;
			}
			xmlhttp4.onreadystatechange = function()
			{
				if (xmlhttp4.readyState==4 && xmlhttp4.status==200)
    			{
    				document.getElementById("emailinfo").innerHTML=xmlhttp4.responseText;
    			}
    		}
    		xmlhttp4.open("POST","./php/checkemail.php",true);
    		xmlhttp4.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp4.send("email="+str);
		}
		function CheckFilled()
		{
			str1 = document.getElementById("username").value;
			str2 = document.getElementById("password").value;
			str3 = document.getElementById("passwordc").value;
			str4 = document.getElementById("email").value;
			if (str1 == "" || str2 == "" || str3 == "" || str4 ==  "")
			{
				return false;
			}
			else return true;
		}
		function CheckError()
		{
			str1 = document.getElementById("unameinfo").innerHTML;
			str2 = document.getElementById("pswdinfo").innerHTML;
			str3 = document.getElementById("cpswdinfo").innerHTML;
			str4 = document.getElementById("emailinfo").innerHTML;
			if (str1 == "" && str2 == "" && str3 == "" && str4 ==  "")
			{
				return false;
			}
			else return true;
		}
		function CheckBeforeSubmit()
		{
			str1 = document.getElementById("username").value;
			str2 = document.getElementById("password").value;
			str3 = document.getElementById("passwordc").value;
			str4 = document.getElementById("email").value;
			CheckUsername(str1);
			CheckPassword(str2);
			CheckPasswordConfirm(str3);
			CheckEmail(str4);
			if (CheckError() == false && CheckFilled() == true)
			{
				document.forms["registerform"].submit();
			}
		}