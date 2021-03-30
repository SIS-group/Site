<!DOCTYPE html>
<html>
<head>
  <title>Student Personal Details</title>
  <link rel="stylesheet" type="text/css" href="../../css/css.css">
  <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../../css/image_view.css">
  <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style type="text/css">

    input[type=submit]    
{
  background-color: #00008B;
  
  border: 2px solid #008CBA;
  border-radius: 20px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
  
  .mybox{
  border: 3px #ccc solid; 
  padding : 80px;
  border-radius: 50px;
  margin-left: 17%;
  margin-top: 6%;
  margin-right: 1%;
  padding-left: 5px;

}

    
.headers{
  
  text-align:center;
}
.mytable{
  border: 2px solid none;
  border-radius: 20px;
  text-align: left;

}
.mytable td input{
  border: 2px solid #008CBA;
  border-radius: 20px;
}

    table{background-color: none; padding: 10px 10px; border-radius: 10px ;}
    th, td {padding: 10px}
    tr:hover {background-color: none;border-bottom: 1px solid none;}
    button:hover{background-color: grey}
    #reject:hover{background-color: red}
    input[type=submit]{margin-left: 30px}
    body{font-family: 'Raleway', sans-serif;}
    h1{background-color: #002b80;color: white;padding: 20px 20px;margin: 1% 14%;border-radius: 10px}
  </style>

  <script src="../../js/showimage.js"></script>
</head>
<body>
  <div class="sidebar">

    <center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
      <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
    </center>
    <a  href="yearviceStudentpersonal2.php">Student Personal Details</a>
   
      <a href="paymentdetails2.php">Student Payment Details</a>
      <a href="coursestatprogram2.php">Course Statistic</a>
      <a href="yearvice2.php">Student results and grades</a>
      
      <a class="active" href="accountS2.php"> Account Settings</a>
      <a href="../../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

  </div>

    <ul>
      <li style="margin-right: 270px" class="dropdown">
      <img src="../Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
      <div class="dropdown-content">
            <a href="accountS2.php">Setting</a>
            <a href="../../login/logout.php">Log out</a>
        </div>
    </li>
      <li style="margin: 25px 20px"><?php echo "Director" ?></li>
      
      <li class="dropdown"> 
          <img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
          <div class="dropdown-content1">
              <p>notifications are shown here</p>
          </div>
        </li>
    </ul>


<div class="mybox">
  <h2 class="headers"> Change Account Settings</h2>
  <?php
         if(isset($_POST['update'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sis11";

          // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $staff_ID = $_POST['staff_ID'];
            $password = $_POST['password'];
            
            $sql = "UPDATE staff ". "SET password = $password ". 
               "WHERE staff_ID = $staff_ID" ;
               if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
              } else {
                echo "Error updating record: " . $conn->error;
              }
              
              $conn->close();
        
            
         }else {
            ?>
               
                
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table class="mytable" width = "800" border =" 0" cellspacing = "20" 
                     cellpadding = "20" >
                  
                     <tr>
                        <td width = "100">Staff ID :</td>
                        <td><input name = "staff_ID" type = "text" 
                           id = "staff_ID"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Password :</td>
                        <td><input name = "password" type = "text" 
                           id = "password"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
               </div>
            <?php
         }
      ?>
</div>

  
</body>
</html>

