<!DOCTYPE html>
<html>
<head>
	<title>FORM VALIDATION</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div id="error" class="alert alert-danger" style="display: none;"></div>	
	<h1 style="text-align: center;"><strong>User Registration Form:</strong></h1>
	<form method="post" name="myform" id="myform" class="form-cls" action="" onsubmit="return validation();"> 
		<div class="form-group">
			<label><span>*</span>First Name</label>
			<input type="text" name="firstname" class="form-control">
		</div>
		<div class="form-group">
			<label>Middle Name</label>
			<input type="text" name="middlename" class="form-control">
		</div>
		<div class="form-group">
			<label><span>*</span>Last Name</label>
			<input type="text" name="lastname" class="form-control">
		</div>
		<div class="form-group">
			<label><span>*</span>User Name</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="form-group">
			<label><span>*</span>Gender</label>
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
		</div>
		<div class="form-group">
			<label><span>*</span>Country</label>
			<select name="country" class="form-control">
				<option value="">--select--</option>
				<option value="NP">Nepal</option>
				<option valur="IND">India</option>
				<option value="US">USA</option>
				<option value="AUS">Australia</option>
			</select>
		</div>
		<div class="form-group">
			<label><span>*</span>Address</label>
			<textarea rows="4" cols="30" class="form-control" name="address"></textarea>
		</div>
		<div class="form-group">
			<label><span>*</span>User Name</label>
			<input type="text" name="username1" class="form-control">
		</div>
		<div class="form-group">
			<label><span>*</span>Email</label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label><span>*</span>Password</label>
			<input type="Password" name="Password" class="form-control">
		</div>
		<div class="form-group">
			<label>Re-Password</label>
			<input type="Password" name="confirm-Password" class="form-control">
		</div>
		<div class="">
			<input type="checkbox" name="checkbox">I agree terms and condition.
		</div>
		<div class="form-group">
			<input type="submit" value="register" name="save" class="btn btn-default btn-primary ">
		</div>
	</form>
</div>	

<script type="text/javascript">
	function validation(){
		var  message = '';
		
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		var firstname = document.forms['myform']['firstname'].value;
		if(firstname.trim() == ''){
			message = 'please enter your firstname.<br>';
		}

		var lastname = document.forms['myform']['lastname'].value;
		if(lastname.trim() == ''){
			message += 'please enter your lastname.<br>';
		}

		var username = document.forms['myform']['username'].value;
		if(username.trim() == ''){
			message += 'please enter your username<br>';
		}

		var gender = document.forms['myform']['gender'].value;
		if(gender == ''){
			message += 'please select your gender.<br>';
		}

		var country = document.forms['myform']['country'].value;
		if(country == ''){
			message += 'please select your country.<br>';
		}

		var username1 = document.forms['myform']['username1'].value;
		if(username1.trim() == ''){
			message += 'enter your username<br>';
		}

		var address = document.forms['myform']['address'].value;
		if(address.trim() == ''){
			message += 'please enter your address.<br>';
		}

		var email = document.forms['myform']['email'].value;
		if(email.trim() == ''){
			message += 'please enter your email.<br>';
		}else{

			if( re.test(email) == false ){
				message += 'Invalid email.<br>';
			}
		}

		var Password = document.forms['myform']['Password'].value;
		if(Password.trim() == ''){
			message += 'please enter your Password.<br>';
		}

		var Password = document.forms['myform']['confirm-Password'].value;
		if(Password.trim() == ''){
			message += 'please confirm your Password.<br>';
		}

		if(document.forms.myform.Password != document.forms.confirm-Password){
			message += 'Password did not matched.<br>';
		}

		if(message!=''){
			document.getElementById('error').innerHTML = message;
			document.getElementById('error').style.display='block';
			return false;
		}
	}

</script>
</body>
</html>