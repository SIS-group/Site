<?php
    $conn=mysqli_connect("localhost","root","","sis");

    if ( isset($_POST["search"]) )
    {
        $text = mysqli_real_escape_string($conn,$_POST['searchtext']);
        $search = mysqli_real_escape_string($conn,$_POST['searchby']);

        $sql2 = " SELECT * FROM student WHERE $search='$text' ";

        $result2 = mysqli_query($conn,$sql2);

        if (!$result2) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }

        if (mysqli_num_rows($result2) > 0) 
        {
            while($row = mysqli_fetch_assoc($result2)) 
            {
                if ( $row["RegNo"]==NULL && $row["IndexNo"]==NULL)
                {
        ?>

            <!DOCTYPE html>
                <html>
                    <head>
                        <title>Student's Details</title>
                        <link rel="stylesheet" type="text/css" href="../../css/css.css">
                        <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
                        
                        <style>
                            .container1{
                                border-radius: 5px;
                                background-color:#002b80 ;
                                padding: 20px;
                            } 
                            table 
                            {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            th
                            {
                                border-radius: 1px;
                                background-color:darkgray;
                                padding: 8px;
                                height: 25px;
                            }
                            td
                            {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }

                            tr:nth-child(even) 
                            {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                    <body style="background-color:lavender;">

                        <div class="sidebar">
                            <a href="notifications.php">Notifications</a>
  		                    <a href=" account_settings.php">Account settings</a>
  		                    <a href="../login/logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
                        </div>
                        
                        <div class="content">
                            <div class="container1">
                                <p style="color:cornsilk; font-size:160%;">Personal Details of <?php echo $text?></p>
                            </div>
                            <table>
                                <tr>
                                    <td>NIC</td>
                                    <td><?php echo $row["NIC"]?></td>
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

                            </table>
                        </div>
                    </body>
                </html>
    <?php
                }
                else
                {
                    echo "<p> This user have been already registered.</p>";
                }
            }
        }
    }

    $sql1 = " SELECT NIC,Name FROM student WHERE RegNo IS NULL AND IndexNo IS NULL ";

    $result = mysqli_query($conn,$sql1);
    $resultcheck = mysqli_num_rows($result);

    if (mysqli_num_rows($result) > 0 ) 
    { ?>

    <!DOCTYPE html>
        <html>
            <head>
                <title>Student's Details</title>
                <style>
                    .container2
                    {
                        border-radius: 5px;
                        background-color:#002b80 ;
                        padding: 20px;
                        font-size: 120%;
                    } 
                    table 
                    {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }
                    th
                    {
                        border-radius: 1px;
                        background-color:#002b80;
                        padding: 8px;
                        height: 25px;
                        text-align: left;
                        color: cornsilk;
                    }
                    td
                    {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) 
                    {
                        background-color: #dddddd;
                    }
                    input[type=submit]
                    {
                        background-color:darkgray;
                        border: none;
                        border-radius: 2px;
                        color:black;
                        cursor: pointer;
                    }
                </style>
            </head>
            <body>
             <div class="content">
                <form method="POST" action="interviewstudentdetails.php">
                    <table>
                        <th>NIC</th>
                        <th>Name</th>
                        <th>Details</th>

        <?php  // output data of each row

        while($row = mysqli_fetch_assoc($result)) 

        {?>
            
                            <tr>
                                <td><?php echo $row["NIC"]?></td>
                                <td><?php echo $row["Name"]?></td>
                                <td>
                                    <input type="submit" name="details" value="details">
                                </td>
                            </tr>
        <?php

        }

        ?>
                    </table>
                </form>
                </div>
            </body>
        </html>
    <?php
    } 

    mysqli_close($conn);
?>