<html>
<body>
<p>IF YOU GET MORE INFORMATION PLEASE LOGIN</p>
<fieldset ><legend >LOGIN</legend>
<form id="form" action = "#" method = "post">
	<label for="name"></label>
		<input type="text" id="name" name="name" placeholder = "Enter Your Name..." size = "50"><br>
		<span id="error"></span><br><br>
	<label for="email"></label>
		<input type="email" name="email" id="email"  placeholder = "Enter Your Mail id ..." size = "50"><br>
		<span id="eerror"></span><br><br>
</fieldset>		
	<button type="submit">SUBMIT</button>
</form>
<script>
	let form=document.getElementById("form");
	let name=document.getElementById("name");
	let uerror=document.getElementById("error");
	let email=document.getElementById("email");
	let eerror=document.getElementById("eerror");
	form.addEventListener("submit",event=>
						{
								event.preventDefault();
								validate();
						});
	function validate()
	{
		let name1=name.value.trim();
		if(name1==="")
		{
			uerror.innerText="Username should not be empty.";
			return false;
		}
		//to check whether it contain atleast 3 characters
		else if(name1.length<3)
		{
			uerror.innerText="Usernmae should contain atleast 3 characters.";
			return false;
		}	
		else if(!(name1.match(/[a-z A-Z]/)))
		{
			uerror.innerText="Username should have only alphabets.";
			return false;
		}
		//	for mail validation
		let email1=email.value.trim()
		if(email1==="")
		{
			eerror.innerText="Email should not be empty.";
			return false;
		}
		else if(!email1.match(/[a-z A-Z 0-9 \.-_]+[@][a-z A-Z 0-9 _-]+[\.][a-z]{2,5}/))
		{
			eerror.innerText="Email is not in the correct form.";
			return false;
		}
  		let comment1 = comment.value.trim()
		if(comment1==="")
		{
			berror.innerText = "Comment Should Not Be Empty";
			return false;
		}
		else if(comment1.length<3)
		{
			berror.innerText = "comment should contain atleast 5 characters";
			return false;
		}
		valid=true
		if(name1 && email1 && comment1)
		{
			form.submit();
		}
	}

</script>
</html>
</body>
