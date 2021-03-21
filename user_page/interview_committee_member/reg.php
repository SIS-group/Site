<?php
    session_start();
    $conn=new mysqli("localhost","root","","sis");

    if ( isset($_POST["search"]) )
    {
        $text = mysqli_real_escape_string($conn,$_POST['searchtext']);
        $program = mysqli_real_escape_string($conn,$_POST['program']);
        //echo $program;
        //$search = mysqli_real_escape_string($conn,$_POST['searchby']);

        $sql1 = " SELECT * FROM student WHERE NIC='$text' AND Program='$program' ";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        $stmt1->close();

        //$result1 = mysqli_query($conn,$sql1);

        if (!$result1) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Student's Details</title>
                <link rel="stylesheet" type="text/css" href="../../css/css.css">
                <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
                <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
                <link rel="stylesheet" type="text/css" href="../../css/image_view.css">
                <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
                
                <style type="text/css">
                    body{font-family: 'Raleway', sans-serif;margin: 0;}
                    .sidebar a
                    {
                        padding: 25%;
                    }
                    .container1
                    {
                        margin-top: 5%;
                        border-radius: 5px;
                        background-color:#002b80 ;
                        padding: 20px;
                        width: 50%;
                    } 
                    table
                    { 
                        border-radius: 10px ;
                        background-color: white; 
                        padding: 4% 4%;
                        margin-bottom: 4%;
                    }
                    td
                    { 
                        padding: 10px 10px ;
                    }
                    th
                    {
                        background-color: #4B0082;
                        color: white;
                        border-radius: 10px ;
                    }
                    input[type=submit],button:hover
                    {
                        background-color: green; 
                        border-radius: 5px;
                    }
                </style>
                <script src="../../js/showimage.js"></script>
            </head>
            <body>

                <div class="sidebar">
                    <center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
                        <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
                    </center>
                    <a class="active" href="../interview_committee_member.php">Interviews</a>
                    <!-- <a href="notifications.php">Notifications</a> -->
                    <a href=" callforinterviews.php">Call for interviews</a>
                    <a href=" account_settings.php">Account settings</a>
                    <a href="../../login/logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
                </div>
                <ul>
                    <li style="margin-right: 270px" class="dropdown">
                        <img src="../Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
                        <div class="dropdown-content">
                            <a href="account_settings.php">Setting</a>
                            <a href="../../Login/logout.php">Log out</a>
                        </div>
                    </li>
                    <li style="margin: 25px 20px"><?php echo "Interview Committee Member" ?></li>
                    
                    <li class="dropdown"> 
                        <img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
                        <div class="dropdown-content1">
                            <p>notifications are shown here</p>
                        </div>
                    </li>
                </ul>
        <?php

        if (mysqli_num_rows($result1) == 0)
        {?>
            <div class="content" align="center">
                    <div class="container1">
                        <p style="color:cornsilk; font-size:160%;">No result found</p>
                    </div> 
                </div> 
        <?php
        }

        if (mysqli_num_rows($result1) == 1) 
        {
            $num =0;
            while($row = $result1->fetch_assoc()) 
            {
                $num++;
                if ( $row["Account_status"]=="Pending")
                {
            ?>
                        
                        <div class="content" align="center">

                            <table>
                                <tr>
                                    <th colspan="2">
                                        <p>Personal Details of <?php echo $text?></p>
                                    </th>
                                </tr>
                                <tr>
                                    <td>NIC</td>
                                    <td><?php echo $row["NIC"]; $nic = $row["NIC"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo $row["Name"]?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>   
                                    <td><?php echo $row["Address"]?></td>
                                </tr>
                                <tr>
                                    <td>District</td>  
                                    <td><?php echo $row["District"]?></td>
                                </tr>
                                <tr>
                                    <td>Province</td>  
                                    <td><?php echo $row["Province"]?></td>
                                </tr>
                                <tr>
                                    <td>email</td>  
                                    <td><?php echo $row["Email"]?></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>  
                                    <td><?php echo $row["DOB"]?></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>  
                                    <td><?php echo $row["Gender"]?></td>
                                </tr>
                                <tr>
                                    <td>Marital_status</td>  
                                    <td><?php echo $row["Marital_status"]?></td>
                                </tr>
                                    <?php 
                                        include("./config/studetails.php");
                                    ?>
                                <tr>
                                    <td>O/L result sheet submission</td>
                                    <td>
                                        <?php 
                                            if($row2!=NULL) 
                                            {
                                                echo "Submitted";
                                            }
                                            else
                                            {
                                                echo "Not submitted";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>A/L result sheet submission</td>
                                
                                    <td>
                                        <?php 
                                            if($row3!=NULL) 
                                            {
                                                echo "Submitted";
                                            }
                                            else
                                            {
                                                echo "Not submitted";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                <?php 
                                    
                                    $img_name = $row2_ol;
                                    //echo $img_name;
                                    echo "<td>

                                    <div id='myModal' class='modal'>
                                    <span class='close'>&times;</span>
                                    <img class='modal-content' id='img01'>
                                    </div>

                                    <img src='../student/Edu_files/OL/$img_name' id=$num style='display:none;width:100%;max-width:100px'>
                                    <button type='button' id=$num onclick='showimage(this.id);'>  Preview O/L certificate </button>

                                    </td>";
                                    $num++;

                                    $image_name = $row3_al;
                                    echo "<td>

                                    <div id='myModal' class='modal'>
                                    <span class='close'>&times;</span>
                                    <img class='modal-content' id='img01'>
                                    </div>

                                    <img src='../student/Edu_files/AL/$image_name' id=$num style='display:none;width:100%;max-width:100px'>
                                    <button type='button' id=$num onclick='showimage(this.id);'>  Preview A/L certificate </button>

                                    </td>"
                                ?>
                                </tr>
                                <tr>
                                <form method="post" action="./config/verify.php">
                                    <?php 
                                        $_SESSION['nic'] = $nic;
                                        //echo $_SESSION['nic'];
                                    ?>
                                    <td colspan="2" align="right"><input type="submit" name="verify" value="Verify"></td>
                                </form>
                                </tr>
                            </table>

                        </div> <!--  content -->
                    
                <?php
                }
                else if ($row["Account_status"]=="Active")
                {?>

                <div class="content" align="center">
                    <div class="container1">
                        <p style="color:cornsilk; font-size:160%;">This user have been already registered.</p>
                    </div> 
                </div> 

                <?php
                }
            }
        }
    }

    mysqli_close($conn);
?>