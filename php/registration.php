<?php 
	$conn=mysqli_connect("localhost","root","","sis");

	if (isset($_POST['regform']){
		$Fname = $_POST['Fname'];
		$DOB = $_POST['DOB'];
		$NIC = $_POST['NIC'];
		$Address = $_POST['Address'];
		$District = $_POST['District'];
		$Province = $_POST['Province'];
		$Div_Secretariat = $_POST['DS'];
		$Zip = $_POST['Zip'];
		$Gender = $_POST['Gender'];
		$Mobilr = $_POST['Mobile'];
		$Email = $_POST['Email'];
		$Marital = $_POST['Marital'];
		$Program = $_POST['Program'];

		$OLindex = $_POST['OLindex'];
		$OLsub1 = $_POST['olsub1'];
		$OLsub2 = $_POST['olsub2'];
		$OLsub3 = $_POST['olsub3'];
		$OLsub4 = $_POST['olsub4'];
		$OLsub5 = $_POST['olsub5'];
		$OLsub6 = $_POST['olsub6'];
		$OLsub7 = $_POST['olsub7'];
		$OLsub8 = $_POST['olsub8'];
		$OLsub9 = $_POST['olsub9'];

		$OLresult1
	}
	mysqli_close($conn);
?>