<?php 
include ("../../../config/dbcon.php");
 
    error_reporting(E_ALL & ~E_NOTICE);

    
    $Prog_ID = $_POST['Program'];
	$sql1 = "SELECT * FROM course WHERE ProgramID='$Prog_ID' ORDER BY Year,Semester";
    $stmt1=$conn->prepare($sql1);
    
    $stmt1->execute();
    $result1=$stmt1->get_result();
    $stmt1->close();
    $num=0;
    while($row1 = $result1->fetch_assoc()) { 
        if ($num==0) {
            $output .= '
                <table align="center">
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Credits</th>
                    <th>Type</th>
                    <th style="background-color: unset;"></th>
                    <th style="background-color: unset;"></th>
                </tr>
            ';
            $num++;
        }
        $output .= '
            <tr>
            <td> '.$row1["CourseID"].'</td>
            <td><div id="name'.$row1["CourseID"].'">'.$row1["Name"].'</div></td>

            <td><center><div id="year'.$row1["CourseID"].'">'.$row1["Year"].'</div></center></td>

            <td><center><div id="semester'.$row1["CourseID"].'">'.$row1["Semester"].'</div></center></td>

            <td><center><div id="credits'.$row1["CourseID"].'">'.$row1["Credits"].'</div></center></td>

            <td><center><div id="type'.$row1["CourseID"].'">'.$row1["Type"].'</div></center></td>
            
            <td>
            <button id="'.$row1["CourseID"].'" name="'.$row1["CourseID"].'" 
            onclick="editCon(this.id)">Edit</button>
            <br>
            <button id="update'.$row1["CourseID"].'" name="'.$row1["CourseID"].'" 
            onclick="updatecourse(this.name)" style="visibility: hidden;">Update</button>
            </td>

            <td><button style="background-color:#8B0000" id="Remove" data-id="'.$row1["CourseID"].'" href="javascript:void(0)">
            Remove</button></td>
            </tr>                  
        ';
    }
    echo $output;
    $conn->close();

?>