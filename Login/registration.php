<?php
	include ("../config/dbcon.php");

	if(isset($_POST['regform'])){
		$Fname = $_POST['Fname'];
		$DOB = $_POST['DOB'];
		$NIC = $_POST['NIC'];
		$Address = $_POST['Address'];
		$District = $_POST['District'];
		$Province = $_POST['Province'];
		$Div_Secretariat = $_POST['DS'];
		$Zip = $_POST['Zip'];
		$Gender = $_POST['Gender'];
		$Mobile = $_POST['Mobile'];
		$Email = $_POST['Email'];
		$Marital = $_POST['Marital'];
		$Program = $_POST['Program'];

		if($Program=='EAT'){
			$Program = '1020'; //program id is declared here
		}
		else{
			$Program = '1021';
		}

		$sql1 = "INSERT INTO student(Name,NIC,Address,District,Province,Divisional_Secretariat,Zip_Code,Email,DOB,Gender,Marital_status,Program) VALUES('$Fname','$NIC','$Address','$District','$Province','$Div_Secretariat','$Zip','$Email','$DOB','$Gender','$Marital','$Program')";
		mysqli_query($conn,$sql1);

		//previous education files
		$type1 = 'O/L';
		$OLindex = $_POST['OLindex']; //O/L files
		$filename1=$_FILES['olfile']['name'];
		$filetmpname1=$_FILES['olfile']['tmp_name'];
		$folder1='../user_page/student/Edu_files/OL/';
		move_uploaded_file($filetmpname1, $folder1.$filename1);

		$sql2 = "INSERT INTO student_edu_doc(NIC_No,Index_No,Type,Edu_file) VALUES ('$NIC','$OLindex','$type1','$filename1')";
		mysqli_query($conn,$sql2);

		$type2 = 'A/L';
		$ALindex = $_POST['ALindex']; //A/L files
		$filename2=$_FILES['alfile']['name'];
		$filetmpname2=$_FILES['alfile']['tmp_name'];
		$folder2='../user_page/student/Edu_files/AL/';
		move_uploaded_file($filetmpname2, $folder2.$filename2);

		$sql3 = "INSERT INTO student_edu_doc(NIC_No,Index_No,Type,Edu_file) VALUES ('$NIC','$ALindex','$type2','$filename2')";
		mysqli_query($conn,$sql3);


		//Emergency contact
		$Name1 = $_POST['Emerg_contact1'];
		$Relation1 = $_POST['Relationship1'];
		$contact1 = $_POST['contact_no1'];

		$sql4 = "INSERT INTO student_emergency_contact(NIC_No,Contact_Name,Relationship,ContactNo) VALUES('$NIC','$Name1','$Relation1','$contact1')";
		mysqli_query($conn,$sql4);

		$Name2 = $_POST['Emerg_contact2'];
		$Relation2 = $_POST['Relationship2'];
		$contact2 = $_POST['contact_no2'];

		$sql5 = "INSERT INTO student_emergency_contact(NIC_No,Contact_Name,Relationship,ContactNo) VALUES('$NIC','$Name2','$Relation2','$contact2')";
		mysqli_query($conn,$sql5);

		//mobile number
		$Mobile = $_POST['Mobile'];
		$sql6 = "INSERT INTO student_contactno(NIC_No,ContactNo) VALUES('$NIC','Mobile')";
		mysqli_query($conn,$sql6);

		header("../index.php");
	}
	mysqli_close($conn);
?>