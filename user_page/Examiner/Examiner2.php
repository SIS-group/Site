<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="../../css/css.css">
  <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../../css/image_view.css">
  <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style type="text/css">



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

    .btnl{
            margin-top: 5%;
            margin-left: ;
    }



  </style>
  <script src="../../js/showimage.js"></script>
</head>
<body>
  <div class="sidebar">

    <center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
      <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
    </center>
    
   
      <a href="reportissues.php">Report issues</a>
      <a href="accountS2.php">Account Settings</a>
    
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
      <li style="margin: 25px 20px"><?php echo "Examiner" ?></li>
      
      <li class="dropdown"> 
          <img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
          <div class="dropdown-content1">
              <p>notifications are shown here</p>
          </div>
        </li>
    </ul>

    
      <?php
$connect = mysqli_connect("localhost", "root", "", "sis11");
$output = '';
if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'> Data Inserted </label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $query = "INSERT INTO tbl_excel(excel_name, excel_email) VALUES ('".$name."', '".$email."')";
    mysqli_query($connect, $query);
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$email.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

 
 <div class="box2">

        <h3 align="center">Update paper marking progress</h3>
    <form action="/action_page.php">
    <label for="fname"> Subject Code</label>
    <input type="text" id="fname" name="firstname" placeholder="Subject Code..">
      <br /><br />
     <label class="container">1st Examiner
          <input type="radio" checked="checked" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="container">2nd Examiner
          <input type="radio" name="radio">
          <span class="checkmark"></span>
          </label>
            <br/>

            <div class="checkb">
          <label class="container">1st paper marking in progress
          <input type="checkbox" >
          <span class="checkmark"></span>
        </label>
        <br />
        <label class="container">1st paper marking is done
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <br />
        <label class="container">2nd paper marking in progress
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <br />
        <label class="container">2nd paper marking is done
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <br />
        <label class="container">result sheet uploaded
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>

  </div>

 
  <div class="box1">
   <h3 align="left">Upload Result Sheets</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" />
    <br />

        

      
     

    <input type="submit" name="import" class="btnl" value="Import" />
   </form>
   <br />
   <br />
   <?php
   echo $output;
   ?>
  </div>

  
</body>
</html>

