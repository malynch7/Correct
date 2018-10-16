<html>
    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" type="text/css" href="LoginStyle.css">
    </head>
    <body>
          <?php
          require 'PHPMailerAutoload.php';

            $msg = "You Password is password";
                 if(isset($_POST['submit'])){
                    $uname = $_POST['username'];
                        if($uname=="admin"){
                            $mail = new PHPMailer;

                    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.google.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'garavsoni12@gmail.com';                 // SMTP username
                    $mail->Password = 'Cheena12345';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to

                    $mail->setFrom('garavsoni12@gmail.com', 'Mailer');
                    $mail->addAddress($_POST['garavsoni12@gmail.com']);     // Add a recipient       // Name is optional
                    $mail->addReplyTo('garavsoni12@gmail.com');
                    $mail->addCC('cc@example.com');
                    $mail->addBCC('bcc@example.com');

                    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    $mail->isHTML(true);                                  // Set email format to HTML

                    $mail->Subject = 'Here is the subject';
                    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        echo 'Message has been sent';
                    }
                        }
                           echo "I am here";
                 }


          ?>

         <div class="CorrectLogin">
                <img src="PhotoIcon" class="IconMain">
                <h1> Connect Login </h1>
                <form method="post">
                    <p>Please enter your Username: </p>
                    <input type="text" name="username" placeholder="Please enter Username" required>
                      <input type="submit" name="submit" value="Enter">
                     </form>
                      <h1><a class="color" href="Login.php">Home</a></h1>
                    </div>


    </body>
</html>
