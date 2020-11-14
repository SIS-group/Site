<?php
	if(isset($_POST['forgotpass'])){
		$to = $_POST['email'];
    	$subject = "This is your temporary password";
         
    	$message = "<b>This is HTML message.</b>";
    	$retval = mail ($to,$subject,$message);
         
        if( $retval == true ) {
            echo "Message sent successfully...";
        }else {
            echo "Message could not be sent...";
        }

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recover password</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		.forgotform{ padding: 20px 20px;border-radius: 10px; background-color: white; width: 30% ; margin-top: 10%}
		input[type="text"]{width: 50%}
		body{font-family: 'Raleway', sans-serif;background-image: url('../icons/back.jpg');}
		.forgotform{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
	</style>
</head>
<body><center>
<div class="forgotform">
	Enter email address<br><br>
	<form action="" method="post">
		<input type="text" name="email" placeholder="abc@mail.com"><br><br>
		<input type="submit" name="forgotpass" value="submit">
	</form>
</div></center>
</body>
</html>