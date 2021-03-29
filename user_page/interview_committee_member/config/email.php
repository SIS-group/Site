<?php 
    //include("../../../config/dbcon.php");
    $conn = new mysqli("localhost","root","","sis");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require '../../../PHPMailer/src/Exception.php';
    require '../../../PHPMailer/src/PHPMailer.php';
    require '../../../PHPMailer/src/SMTP.php';

    function sendmail($email,$subject,$msg)
    {
        //Create a new PHPMailer instance
        $mail = new PHPMailer();
        
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'ccuc5001@gmail.com';
        //Password to use for SMTP authentication
        $mail->Password = '1234@ccuoc';
        //Set who the message is to be sent from
        $mail->setFrom('no-reply@ccuoc.com', 'Cyber campus UOC');
        //Set an alternative reply-to address
        $mail->addReplyTo('replyto@ccuoc.com', 'First Last');
        //Set who the message is to be sent to
        $mail->addAddress($email);
        //Set the subject line
        $mail->Subject = $subject;
        
        $mail->msgHTML($msg , __DIR__);
        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
        
        //Attach an image file
        // $mail->addAttachment('images/phpmailer_mini.png');
        
        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }


    }

    if(isset($_POST["submit"]))
    {
        $date = $_POST["date"];
        $time = $_POST["time"];

        

        $sql1 = "SELECT Email,Name FROM student WHERE RegNo IS NOT NULL AND Account_status='Pending'";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        
        while($row1 = $result1->fetch_assoc())
        {
            //echo $row1['Email'];
            $to = $row1['Email'];
            $subject = "Registering for cyber campus degree programme";
            $txt = "Dear student,\nThis is to inform you that you have successfully registered to the Degree Programme of Cyber Campus of University of Colombo. The interview will be held on ".$date.'at'.$time." am in the University of Colombo premises. Be there on time and bring the necessary documents (O/L certificate, A/L certificate).\nBest Regards";
            
            sendmail($to,$subject,$txt);
        }
        // $to = "githubuseracc1998@gmail.com";
        // $subject = "Registering for cyber campus degree programme";
        // $txt = "Dear student,\nThis is to inform you that you have successfully registered to the Degree Programme of Cyber Campus of University of Colombo. The interview will be held on ".$date.'at '.$time." in University of Colombo premises. Be there on time and bring the necessary documents.\nBest Regards";
        // $msg = ' <!DOCTYPE html>
        //     <html lang="en">
        //     <style>
        //     span{
        //         color: red;
        //     }
        //     </style>
        //     <body>
        //     <h2>Cyber campus interview is held at  <span>9.00am</span> on  <span>2021/03/30</span></h2>
        //     <p> Kaama onnm aran enna</p>
        //     </body>
        //     </html>'  ;

        
           // session_start();
            $_SESSION["success"] = "Emails sent succesfully";
            
            //header("location:../callforinterviews.php");
            echo '<script type="text/javascript">window.location = "../callforinterviews.php"</script>';
            exit;
    }

    $conn->close();
?>