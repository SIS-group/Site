<?php
	include ("../../../config/dbcon.php");

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
		$folder0='../Profile_photo/';
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

		$Mobile = $_POST['Mobile'];
		$Landline = $_POST['Landline'];

	}

		//insert data into student table
		/*$sql1 = "INSERT INTO student(Name_with_initials,Name,NIC,Address,District,Province,Divisional_Secretariat,Zip_Code,Email,DOB,Gender,Marital_status,Program,Profile_picture) VALUES('$Iname','$Fname','$NIC','$Address','$District','$Province','$Div_Secretariat','$Zip','$Email','$DOB','$Gender','$Marital','$Program','$filename0')";
		mysqli_query($conn,$sql1);*/

		$stmt=$conn->prepare("INSERT INTO student(Name_with_initials,Name,NIC,Address,District,Province,Divisional_Secretariat,Zip_Code,Email,DOB,Gender,Marital_status,Program,Profile_picture) 
		VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

		$stmt->bind_param('sssssssissssss',$Iname,$Fname,$NIC,$Address,$District,$Province,$Div_Secretariat,$Zip,$Email,$DOB,$Gender,$Marital,$Program,$filename0);
		$stmt->execute();
		$stmt->close();

		/*$sql3 = "INSERT INTO student_contactno(NIC_No,ContactNo) VALUES('$NIC','$Mobile')";
		mysqli_query($conn,$sql3);*/

		$stmt1=$conn->prepare("INSERT INTO student_contactno(NIC_No,ContactNo) VALUES(?,?)");
		$stmt1->bind_param('si',$NIC,$Mobile);
		$stmt1->execute();
		$stmt1->close();

		if(!empty($Landline)){
			$stmt2=$conn->prepare("INSERT INTO student_contactno(NIC_No,ContactNo) VALUES(?,?)");
			$stmt2->bind_param('si',$NIC,$Landline);
			$stmt2->execute();
			$stmt2->close();

			/*$sql4 = "INSERT INTO student_contactno(NIC_No,ContactNo) VALUES('$NIC','$Landline')";
			mysqli_query($conn,$sql4);*/
		}

		header("location: ../../../Student_Reg_form-2.html");

	$conn->close();
?>