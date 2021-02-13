<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{border-radius:30px; padding: 2% 2%; background-color: white;vertical-align: center;width: 400px ; margin-top:1%;box-shadow: unset;	
		}
		td{text-align: center; padding: 4px}

		input[type="radio"] {opacity: 0;width: 0 ;position: fixed; }
		label{background-color: #ddd;border: 1px solid #444;border-radius: 10px; width: 50%; padding: 10px 15px;display: inline-block;
		}
		label:hover {background-color: #dfd;}
		input[type="radio"]:focus + label {
    		border: 2px dashed #444;
		}

		input[type="radio"]:checked + label {
    		background-color: #bfb;
    		border-color: #4c4;
		}
		input[type="text"],input[type="password"]{border-radius: 25px ; width: 60%;height: 20px}
		.logininput::placeholder{color: black;}
		
		input[type="submit"]{width: 50%}
		button:hover,input[type="submit"]:hover{
			background-color: green; color: white;width: 50% ;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

		}
		body{font-family: 'Raleway', sans-serif;background-image: url('./icons/back.jpg');}
		#login{font-size: large;}

		.grid-container {
  			display: grid;
  			grid-template-columns: auto auto;
  			grid-gap: 0px;
  			margin-top: 50px;
  			margin-left: 15%;
  			margin-right: 15%;
  			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  			border-radius: 20px;
  			background-color: white;
		}

		.grid-container > div {
  			padding: 20px 20px;
  			
		}

		.item1 {
  			grid-column: 1 / 2;
  			width: 93%;
  			background-color: #4B0082;
  			color: white;
		}	
	</style>

</head>
<body >
<div class="grid-container">

	<div class="item1">
		
		<center><img src="./icons/logo.png" style="width:300px;height:300px;margin-top: 50px" ></center>
		<h3 align="center" style="margin-top: 100px">Student Information System of Cyber Campus , University of Colombo</h1>

	</div>

	<div class="item2">
	<table align="center" width="20%" >
	<form action="./login/login.php" method="post" >
			
			<tr>
				<td colspan="2" style="color: #4B0082" id='login'><h1>LOGIN</h1></td>
			</tr>
			<tr>
				<td >
					<input type="radio" id="radiostudent" name="usertype" value="Student" >
    				<label for="radiostudent">Student</label>
				</td>
			</tr>
			<tr>
				<td >
					<input type="radio" id="radiostaff" name="usertype" value="Staff" >
    				<label for="radiostaff">Staff Member</label>
				</td>
			</tr>

			
			<tr>

				<td>
					<input type="text" name="Username" placeholder="Username" class="logininput">
				</td>
			</tr>
			
			<tr>
				<td><input type="Password" name="Password" placeholder="Password" class="logininput"></td>
			</tr>
			<tr>
				<td style="color: red"><i>
					<?php
                    	if(isset($_SESSION["error"])){
                        	$error = $_SESSION["error"];
                        	echo "<span>$error</span>";
                    	}
                	?> 
				</i></td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="passrem" id="passrem">
						<label for="passrem" style="background-color: unset;padding: unset;border-style: unset;"><i>remember me</i></label>
				</td>
			</tr>
			<tr>
				<td colspan="2" ><input type="submit" name="loginform" value="Login"></td>
			</tr>
	</form>
	<tr>
		<td style="border-bottom: 1px solid #ddd;"><a href="./forgot_pass.html"><i>forgot password ?</i></a></td>
	</tr>
	<tr>
		<td>
			<i>New Student?</i>
		</td>
	</tr>
	<tr >
		<td colspan="2" ><a href="./Student_Reg_form.html" target="_self">
			<button style="width: 50%;background-color: #00994d">Apply</button></a><br>
		</td>
	</tr>
	
	</table>
	</div>
</div>
</body>
</html>

<?php
    unset($_SESSION["error"]);
?>