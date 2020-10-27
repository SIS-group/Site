<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Personal Details</title>
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
    </head>

    <body>
        <div class="Button3">
            <button class="button" onclick="document.location='index.php'">Logout</button>
        </div>        
        <div class="container1">
            <p style="color:cornsilk; font-size:160%;">Personal Details of Students</p>
        </div>
        <form name="studentpersonaldata" method="POST" action="personaldetails.php">
            <div class="container2">
                <p style="font-size: 120%;">Search by: </p>

                <input type="radio"  name="searchby" value="IndexNo">
                <label for="indexno"  style="color: darkolivegreen;">Index No</label><br>

                <input type="radio" name="searchby" value="RegNo">
                <label for="regno" style="color: darkolivegreen;">Reg No</label><br>

                <input type="radio" name="searchby" value="Name">
                <label for="name" style="color: darkolivegreen;">Name</label><br>

                <input type="text" name="searchtext" placeholder="enter text">
                <input type="submit" name="search" value="search">   
            </div>
        </form>
    </body>
</html>