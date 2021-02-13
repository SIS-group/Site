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

		//previous education files
		$type1 = 'O/L';
		$OLindex = $_POST['OLindex']; //O/L files
		$filename2=$_FILES['olfile']['name'];
		$filetmpname2=$_FILES['olfile']['tmp_name'];
		$folder2='./Edu_files/OL/';
		move_uploaded_file($filetmpname2, $folder2.$filename2);

		$type2 = 'A/L';
		$ALindex = $_POST['ALindex']; //A/L files
		$filename3=$_FILES['alfile']['name'];
		$filetmpname3=$_FILES['alfile']['tmp_name'];
		$folder3='./Edu_files/AL/';
		move_uploaded_file($filetmpname3, $folder3.$filename3);

		$Name1 = $_POST['Emerg_contact1'];
		$Relation1 = $_POST['Relationship1'];
		$contact1 = $_POST['contact_no1'];

		$Name2 = $_POST['Emerg_contact2'];
		$Relation2 = $_POST['Relationship2'];
		$contact2 = $_POST['contact_no2'];

		$Mobile = $_POST['Mobile'];
		$Landline = $_POST['Landline'];

	}

		//insert data into student table
		$sql1 = "INSERT INTO student(Name_with_initials,Name,NIC,Address,District,Province,Divisional_Secretariat,Zip_Code,Email,DOB,Gender,Marital_status,Program,Profile_picture) VALUES('$Iname','$Fname','$NIC','$Address','$District','$Province','$Div_Secretariat','$Zip','$Email','$DOB','$Gender','$Marital','$Program','$filename0')";
		mysqli_query($conn,$sql1);

		$sql2 = "INSERT INTO student_reg_payments(NIC_No,Type,Pay_slip) VALUES('$NIC','$payment_type','$filename1')";
		mysqli_query($conn,$sql2);


		$sql3 = "INSERT INTO student_contactno(NIC_No,ContactNo) VALUES('$NIC','$Mobile')";
		mysqli_query($conn,$sql3);

		if(!empty($Landline)){
			$sql4 = "INSERT INTO student_contactno(NIC_No,ContactNo) VALUES('$NIC','$Landline')";
			mysqli_query($conn,$sql4);
		}

		$sql5 = "INSERT INTO student_edu_doc(NIC_No,Index_No,Type,Edu_file) VALUES ('$NIC','$OLindex','$type1','$filename2'),('$NIC','$ALindex','$type2','$filename3')";
		mysqli_query($conn,$sql5);	


		$sql6 = "INSERT INTO student_emergency_contact(NIC_No,Contact_Name,Relationship,ContactNo) VALUES('$NIC','$Name1','$Relation1','$contact1'),('$NIC','$Name2','$Relation2','$contact2')";
		mysqli_query($conn,$sql6);

		header("location: ../../index.php");

	mysqli_close($conn);
?>