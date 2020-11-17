<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>

      <style> 
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
div {
  
  border: 2px solid #008CBA;
  border-radius: 15px;
  background-color: #6495ED;
  padding: 100px;
}

.mytable{
  border: 2px solid #008CBA;
  border-radius: 20px;

}
.mytable td input{
  border: 2px solid #008CBA;
  border-radius: 20px;
}
.headers{
  text-decoration: underline blue;
  width: auto;
}
</style>

   </head>
   
   <body>

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
               <div>
                <h1 class="headers"> Account Settings </h1>
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
      
   </body>
</html>