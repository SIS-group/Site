<?php
	include ("../../config/dbcon.php");

	if(isset($_POST['regform'])){
		$Iname = $_POST['Iname'];
		$Fname = $_POST['Fname'];
		$DOB = $_POST['DOB'];
		$NIC = $_POST['NIC'];
		$Address = $_POST['Address'];
		$District = $_POST['District'];
		$Province = $_POST['Province'];
		$Div_Secretariat = $_POST['DS'];
		$Zip = $_POST['Zip'];
		$Gender = $_POST['Gender'];

		$filename0=$_FILES['stu_photo']['name']; //profile photo
		$filetmpname0=$_FILES['stu_photo']['tmp_name'];
		$folder0='./Profile_photo/';
		move_uploaded_file($filetmpname0, $folder0.$filename0);
		
		
		$Email = $_POST['Email'];
		$Marital = $_POST['Marital'];
		$Program = $_POST['Program'];

		if($Program=='EAT'){
			$Program = '1020'; //program id is declared here
		}
		else{
			$Program = '1021';
		}

		$payment_type = $_POST['payment'];
		$filename1=$_FILES['reg_fee_slip']['name']; //application fee slip
		$filetmpname1=$_FILES['reg_fee_slip']['tmp_name'];
		$folder1='./Application_fee_slips/';
		move_uploaded_file($filetmpname1, $folder1.$filename1);

		//insert data into student table
		$sql1 = "INSERT INTO student(Name_with_initials,Name,NIC,Address,District,Province,Divisional_Secretariat,Zip_Code,Email,DOB,Gender,Marital_status,Program,Profile_picture) VALUES('$Iname','$Fname','$NIC','$Address','$District','$Province','$Div_Secretariat','$Zip','$Email','$DOB','$Gender','$Marital','$Program','$filename0')";
		mysqli_query($conn,$sql1);

		$sql2 = "INSERT INTO student_reg_payments(NIC_No,Type,Pay_slip) VALUES('$NIC','$payment_type','$filename1')";
		mysqli_query($conn,$sql2);

		//mobile number
		$Mobile = $_POST['Mobile'];
		$sql3 = "INSERT INTO student_contactno(NIC_No,ContactNo) VALUES('$NIC','$Mobile')";
		mysqli_query($conn,$sql3);

		$Landline = $_POST['Landline'];
		if(!empty($Landline)){
			$sql4 = "INSERT INTO student_contactno(NIC_No,ContactNo) VALUES('$NIC','$Landline')";
			mysqli_query($conn,$sql4);
		}

		header("location: ../../index.php");
	}
	mysqli_close($conn);
?>