<!DOCTYPE html>
<html>
<head>
  <title>Examiner</title>
  <link rel="stylesheet" type="text/css" href="../../css/css.css">
  <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../../css/image_view.css">
  <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style type="text/css">

    input[type="checkbox"]
{
    vertical-align:middle;

}

input[type=checkbox][disabled][checked]{
  outline:3px solid green; 
  color: red;
}
input[type=radio][disabled][checked]{
  outline:3px solid green; 

}



    table{background-color: white; padding: 10px 10px; border-radius: 10px ;}
    th, td {padding: 10px}
    tr:hover {background-color: #f2f2f2;border-bottom: 1px solid #ddd;}
    button:hover{background-color: grey}
    #reject:hover{background-color: red}
    input[type=submit]{margin-left: 30px}
    body{font-family: 'Raleway', sans-serif;}
    h1{background-color: #002b80;color: white;padding: 20px 20px;margin: 1% 14%;border-radius: 10px}

    .box1{

      border-radius: 15px;
      margin-left: 30%;
      margin-right: 20%;
      margin-top: 1%;
      border : 20px;
      padding-top: 10%;
      border: 2px solid #008CBA;
      border-radius: 15px;
      background-color: #6495ED;
      padding: 20px;

    }



    .btnl{
            margin-top: 5%;
            margin-left: ;
    }

       .box2{

      border-radius: 15px;
      margin-left: 30%;
      margin-right: 20%;
      margin-top: 7%;
      border : 20px;
      padding-top: 10%;
      border: 2px solid #008CBA;
      border-radius: 15px;
      background-color: #6495ED;
      padding: 20px;

    }

    .checkb{
      margin-top: 4%;
    }

   
  
  input[name="A"] {
  margin-left: 10%;
}

   input[name="B"] {
  margin-left: 13.7%;
}
   
   input[name="C"] {
  margin-left: 17.3%;
} 

input[name="D"] {
  margin-left: 9.1%;
} 

input[name="E"] {
  margin-left: 12.8%;
} 
input[name="radio1"] {
  margin-left: 1.8%;
} 


   

  </style>
  <script src="../../js/showimage.js"></script>
</head>
<body>

     <?php

      session_start();
      $username = $_SESSION['login_user'];
      $phpVariable = $_SESSION['CourseID_EX'];
      $ProgramID_EX = $_SESSION['ProgramID_EX'];
      $ExaminerLVL = $_SESSION['ExaminerLVL_EX'];
     
      ?>

  <div class="sidebar">

    <center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
      <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
    </center>
    
    
      
      <a href="accountS2e1.php">Account Settings</a>
      <a href="uploadcheck.php">uploadcheck</a>
    
      <a href="../../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

  </div>

    <ul>
      <li style="margin-right: 270px" class="dropdown">
      <img src="../Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
      <div class="dropdown-content">
            <a href="accountS2e1.php">Setting</a>
            <a href="../../login/logout.php">Log out</a>
        </div>
    </li>
      <li style="margin: 25px 20px"><?php echo "Examiner" ?></li>
      
      <li class="dropdown"> 
          <img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
          <div class="dropdown-content1">
              <p>notifications are shown here</p>
          </div>
        </li>
    </ul>

    <div>
 
    
     
    <div class="box2">
      <h3 align="center">Update paper marking progress</h3>
      <?php

      
      


       echo " <h3>  Examiner ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; {$_SESSION['login_user']} </h3> ";
       echo " <h3>  Examiner Level&nbsp; :&nbsp;&nbsp; {$_SESSION['ExaminerLVL_EX']}nd Examiner </h3> ";
       echo " <h3>  Program ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :&nbsp;&nbsp;&nbsp; {$_SESSION['ProgramID_EX']} </h3> ";
       echo " <h3>  Course ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    :&nbsp;&nbsp;&nbsp; {$phpVariable} </h3> ";
      ?>

     

      <?php
                $conn = mysqli_connect("localhost", "root", "", "sis11");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT 1st_marking_progress,2nd_marking_progress,examinerLVL FROM examinertable WHERE examinerID ='$username' AND CourseID='$phpVariable' AND ProgramID = '$ProgramID_EX' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $PPR1 = $row['1st_marking_progress'];
                    $PPR2 = $row['2nd_marking_progress'];
                    $examinerLVL= $row['examinerLVL'];

                  }

                }
      ?>

    
    
      <br />
     
           

            <div class="checkb">
            
               
                <label class="container">1st paper marking in progress</td>
               <input type="checkbox" name="A" disabled=""   value="Adidas"<?php echo ($PPR1=='not done')?"checked":"" ;?>
             
               </label><br/>

               <label class="container">1st paper marking is done
               <input type="checkbox" name="B" disabled=""   value="Adidas"<?php echo ($PPR1=='done')?"checked":"" ;?> 
               </label><br/><br/>

                <label class="container">result sheet uploaded
               <input type="checkbox" name="C" disabled=""   value="Adidas"<?php echo ($PPR1=='done')?"checked":"" ;?> 
               </label><br/><br/>



               <label class="container">2nd paper marking in progress
               <input type="checkbox" name="D" disabled=""   value="Adidas"<?php echo ($PPR2=='not done' && $PPR1=='done' )?"checked":"" ;?> 
               </label><br/>

               <label class="container">2nd paper marking is done
               <input type="checkbox" name="E" disabled="" value="Adidas"<?php echo ($PPR2=='done')?"checked":"" ;?> 
               </label><br/>

               
              

           </div>

  </div>

 
  <div class="box1">

      <?php

            
            $userid = $_SESSION['login_user'];
if(isset($_POST["submit"]))
{

                $url='localhost';
                $username='root';
                $password='';
                $conn=mysqli_connect($url,$username,$password,"sis11");
          if(!$conn){
          die('Could not Connect My Sql:' .mysqli_error());
      }

            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "csv" && $imageFileType != "xls" && $imageFileType != "xlsx") {
                echo "Sorry, only CSV, xlsx, xls files are allowed.";
                $uploadOk = 0;
              }


              if ($uploadOk == 0) {
                  echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
                  } else {
                    echo "Sorry, there was an error uploading your file.";
                  }
                }


                if($uploadOk==1){

                    $sql = "INSERT INTO result(CourseID, File, Examiner_ID,Examiner_Level,Verifying_status,Marking_status,Release_Date)              
                        VALUES ('$phpVariable', '{$_FILES["file"]["name"]}', '{$_SESSION['login_user']}','$ExaminerLVL','not verified','1','NOW()') 
                         ON DUPLICATE KEY UPDATE File='{$_FILES["file"]["name"]}',  Examiner_Level = '$ExaminerLVL', Release_Date = 'NOW()' ";

                        if ($conn->query($sql) === TRUE) {
                          echo "New record created successfully";
                        } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                        }


                }








               echo "<p> <font color=green font face='arial' size='4pt'>Successfully Uploaded </font> </p>";
                 $sqll = "UPDATE examinertable SET 1st_marking_progress='done' WHERE examinerID ='$userid' AND CourseID = '$phpVariable' ";
                 
                 
                 if ($conn->query($sqll) === TRUE) {
                      echo "Record updated successfully";
                      echo '<script>window.location.href = "Examiner1.php";</script>';
                    } else {  
                      echo "Error updating record: " . $conn->error;
                    }

             } 


?>




   <h3 align="left">Upload Result Sheets</h3><br />

   <form enctype="multipart/form-data"  method="post" role="form">
       <!--  <input type="hidden" name="phpVariable" value="<?php echo $phpVariable; ?>" />     -->
        
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only Excel/CSV File Import.</p>
    </div>
    <button type="submit" action="Examiner1.php" class="btn btn-default" name="submit" value="submit">Upload</button>
  </form>

   <br />
   <br />
   
  </div>

  

  
</body>
</html>

