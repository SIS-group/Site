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

          if($_FILES["file"]["size"] > 0) {
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          
          $CourseID=fgets($handle); 

          fgets($handle); 


          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
          $IndexNo = $filesop[0];
          $Result = $filesop[1];
          $sql = "insert into student_result(CourseID,IndexNo,Result) values ('$CourseID','$IndexNo','$Result')";
          $stmt = mysqli_prepare($conn,$sql);
          mysqli_stmt_execute($stmt);

         
           }

            if($sql){
               echo "<p> <font color=green font face='arial' size='4pt'>Successfully Uploaded </font> </p>";
                 $sqll = "UPDATE examinertable SET 1st_marking_progress='done' WHERE examinerID ='$userid' AND CourseID = '$phpVariable' ";
                 
                 
                 if ($conn->query($sqll) === TRUE) {
                      echo "Record updated successfully";
                    } else {
                      echo "Error updating record: " . $conn->error;
                    }

             } 
             else
           {
            echo "Sorry! Unable to impo.";
            }
       }
       else
        echo "<p> <font color=red font face='arial' size='4pt'>Invalid File:Please Upload CSV File </font> </p>";

}