<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "sis11";
 $conn = new mysqli($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 ?>


<!DOCTYPE html>
<html>
<head>
<style>

#myInput  {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 49%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 5px solid #ddd;
  margin-bottom: 12px;
}
#myInput2  {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 49%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 5px solid #ddd;
  margin-bottom: 12px;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2; }

#customers tr: {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000080;
  color: white;
  text-align: center;
}
</style>
</head>
<body>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for IndexNo.." title="Type in an IndexNo">
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for names.." title="Type in a name">
<table id="customers">
  <tr>
    <th>IndexNo</th>
    <th>RegNo</th>
    <th>Name</th>
    <th>NIC</th>
    <th>Email</th>
    <th>Address</th>
  </tr>
  
      <?php
                $conn = mysqli_connect("localhost", "root", "", "sis11");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT DISTINCT student.IndexNo,student.RegNo ,student.Name, student.NIC,student.Email ,student.Address
                FROM ((course INNER JOIN student_result ON course.CourseID=student_result.CourseID ) INNER JOIN student ON student.IndexNo= student_result.IndexNo) WHERE course.Year='2' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['IndexNo'];
            ?>
                      <tr>
                          
                          <td nowrap="true" style="text-align: center;"><?php echo $row['IndexNo']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['RegNo']; ?></td>
                          
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Name']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['NIC']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Email']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Address']; ?></td>
                          
                        
                      </tr>
            <?php
                  }
                } 
                else 
                { 
                  echo ""; 
                }
                $conn->close();
            ?>



</table>

  <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("customers");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("customers");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>


</body>
</html>
