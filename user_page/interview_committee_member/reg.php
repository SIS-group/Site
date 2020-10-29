<?php
    $conn=mysqli_connect("localhost","root","","sis");

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
            </body>
        </html>
    <?php
    } 

    mysqli_close($conn);
?>