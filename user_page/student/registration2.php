<?php
	include ("../../config/dbcon.php");

	if(isset($_POST['regform'])){
		$NIC = $_POST['NIC'];
	
		//previous education files
		$type1 = 'O/L';
		$OLindex = $_POST['OLindex']; //O/L files
		$filename1=$_FILES['olfile']['name'];
		$filetmpname1=$_FILES['olfile']['tmp_name'];
		$folder1='./Edu_files/OL/';
		move_uploaded_file($filetmpname1, $folder1.$filename1);

		$type2 = 'A/L';
		$ALindex = $_POST['ALindex']; //A/L files
		$filename2=$_FILES['alfile']['name'];
		$filetmpname2=$_FILES['alfile']['tmp_name'];
		$folder2='./Edu_files/AL/';
		move_uploaded_file($filetmpname2, $folder2.$filename2);

		$Name1 = $_POST['Emerg_contact1'];
		$Relation1 = $_POST['Relationship1'];
		$contact1 = $_POST['contact_no1'];

		$Name2 = $_POST['Emerg_contact2'];
		$Relation2 = $_POST['Relationship2'];
		$contact2 = $_POST['contact_no2'];

	}

	$sql1 = "INSERT INTO student_edu_doc(NIC_No,Index_No,Type,Edu_file) VALUES ('$NIC','$OLindex','$type1','$filename1'),('$NIC','$ALindex','$type2','$filename2')";
	mysqli_query($conn,$sql1);	


	$sql2 = "INSERT INTO student_emergency_contact(NIC_No,Contact_Name,Relationship,ContactNo) VALUES('$NIC','$Name1','$Relation1','$contact1'),('$NIC','$Name2','$Relation2','$contact2')";
	mysqli_query($conn,$sql2);


	header("location: ../../index.php");

	mysqli_close($conn);
?>