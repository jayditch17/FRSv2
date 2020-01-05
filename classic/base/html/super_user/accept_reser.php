<?php

  require 'phpmailer/PHPMailerAutoLoad.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 4;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'frsitproject@gmail.com';                     // SMTP username
    $mail->Password   = 'frs@itproject123';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('frsitproject@gmail.com', 'FRS');
    $mail->addAddress('frsitproject@gmail.com', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('frsitproject@gmail.com', 'Information');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reservation/Request Accepted';
    $mail->Body    = 'Your Reservation Request has been Accepted Thank You!';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
                                    echo '<script type="text/javascript">'; 
                                    echo 'alert("Reservation is Accepted. Email Sent");'; 
                                    echo 'window.location.href = "reservation.php";';
                                    echo '</script>';    
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
<?php
    include('functions.php');
    $eventID = $_GET['eventID'];
    $query = "select * from `request_su` where `eventID` = '$eventID'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $firstName = $row["firstName"];
            $lastName = $row["lastName"];
            $mobNum = $row["mobNum"];
            $org = $row["org"];
            $pos = $row["pos"];
            $adviser = $row["adviser"];
            $eveName = $row["eveName"];
            $evePlace = $row["evePlace"];

            $numPart = $row["numPart"];
            $startDate = $row["startDate"];
            $endDate = $row["endDate"];
            $startTime = $row["startTime"];
            $endTime = $row["endTime"];
            $query = "INSERT INTO `events` (`eventID`, `firstName`, `lastName`, `mobNum`, `org`, `pos`, `adviser`, `eveName`, `evePlace`, `numPart`, `startDate`, `endDate`, `startTime`, `endTime`) VALUES (NULL, '$firstName', '$lastName', '$mobNum', 'org', '$pos', '$adviser', '$eveName', '$evePlace', '$numPart', '$startDate', '$endDate', '$startTime', '$endTime');";
        }
        $query .= "DELETE FROM `request_su` WHERE `request_su`.`eventID` = '$eventID';";
        if(performQuery($query)){
            echo "";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Reservation Accepted</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-success fade in">
                            <input type="hidden" name="eventID" value="<?php echo trim($_GET["eventID"]); ?>"/>
                            <p>The reservation is now Pending to the Offices.</p><br>
                            <p>

                                <a href="reservation.php" class="btn btn-default">Back</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>