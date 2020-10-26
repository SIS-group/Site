<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sis";

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
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Staff ID</td>
                        <td><input name = "staff_ID" type = "text" 
                           id = "staff_ID"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">password</td>
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
            <?php
         }
      ?>
      
   </body>
</html>