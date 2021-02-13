<?php 
	include ("../../../config/dbcon.php");
	if(isset($_POST['regform3'])){
		$NIC = $_POST['NIC'];
		//previous education files
		//$type1 = 'O/L';
		$OLindex = $_POST['OLindex']; //O/L files
		$filename2=$_FILES['olfile']['name'];
		$filetmpname2=$_FILES['olfile']['tmp_name'];
		$folder2='../Edu_files/OL/';
		move_uploaded_file($filetmpname2, $folder2.$filename2);

		//$type2 = 'A/L';
		$ALindex = $_POST['ALindex']; //A/L files
		$filename3=$_FILES['alfile']['name'];
		$filetmpname3=$_FILES['alfile']['tmp_name'];
		$folder3='../Edu_files/AL/';
		move_uploaded_file($filetmpname3, $folder3.$filename3);

		$Name1 = $_POST['Emerg_contact1'];
		$Relation1 = $_POST['Relationship1'];
		$contact1 = $_POST['contact_no1'];

		$Name2 = $_POST['Emerg_contact2'];
		$Relation2 = $_POST['Relationship2'];
		$contact2 = $_POST['contact_no2'];
	}

	$stmt1=$conn->prepare("INSERT INTO student_edu_doc(NIC_No,Index_No,Type,Edu_file) VALUES (?,?,?,?)");
	$stmt1->bind_param('ssss',$NIC2,$index,$type,$filename);

	$NIC2 = $NIC;
	$index = $OLindex;
	$type = 'O/L';
	$filename = $filename2;
	$stmt1->execute();

	$NIC2 = $NIC;
	$index = $ALindex;
	$type = 'A/L';
	$filename = $filename3;
	$stmt1->execute();

	$stmt1->close();

	/*$sql5 = "INSERT INTO student_edu_doc(NIC_No,Index_No,Type,Edu_file) VALUES ('$NIC','$OLindex','$type1','$filename2'),('$NIC','$ALindex','$type2','$filename3')";
		mysqli_query($conn,$sql5);	*/

	$stmt2=$conn->prepare("INSERT INTO student_emergency_contact(NIC_No,Contact_Name,Relationship,ContactNo) VALUES(?,?,?,?)");
	$stmt2->bind_param('sssi',$NIC1,$Name,$Relation,$contact);
	
	$NIC1 = $NIC;
	$Name = $Name1;
	$Relation = $Relation1;
	$contact = $contact1;
	$stmt2->execute();

	$NIC1 = $NIC;
	$Name = $Name2;
	$Relation = $Relation2;
	$contact = $contact2;
	$stmt2->execute();

	$stmt2->close();

	/*$sql6 = "INSERT INTO student_emergency_contact(NIC_No,Contact_Name,Relationship,ContactNo) VALUES('$NIC','$Name1','$Relation1','$contact1'),('$NIC','$Name2','$Relation2','$contact2')";
		mysqli_query($conn,$sql6);*/

	header("location:../../../index.php");
	$conn->close();
?>