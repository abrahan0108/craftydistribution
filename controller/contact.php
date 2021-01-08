<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

// Recojo todos los datos que me llegan via POST
$name = "";
$affair = "";
$email = "";
$phone = "";
$message = "";
if($_POST){
    if(isset($_POST['name']) && $_POST['name'] != ''){
        $name = $_POST['name'].trim();
    }
    if(isset($_POST['affair']) && $_POST['affair'] != ''){
        $affair= $_POST['affair'].trim();
    }
    if(isset($_POST['email']) && $_POST['email'] != ''){
        $email= $_POST['email'].trim();
    }
    if(isset($_POST['phone']) && $_POST['phone'] != ''){
        $phone= $_POST['phone'].trim();
    }
    if(isset($_POST['message']) && $_POST['message'] != ''){
        $message= $_POST['message'];
    }
}


// Inicia el mailer y pasa true para activar el mailer
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.craftydistribution.com ';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'systems@craftydistribution.com';                     // SMTP username
    $mail->Password   = 'wv3M&&fMvS=W';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('systems@craftydistribution.com', 'Mailer web');
    $mail->addAddress('alanyari@craftydistribution.com', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('systems@craftydistribution.com', 'Mailer Web');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje desde el sistema web';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="es">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
        <title>Correo Desde p&aacute;gina web</title>
    </head>
    
    <body>
        <!-- header start -->
        <header>
            <div class="container-fluid p-0">
                <nav class="navbar navbar-dark bg-dark ">
                    <a href="#" class="navbar-brand">Crafty Distribution Correo De P&aacute;gina Web</a>
                </nav>
            </div>
        </header>
        <!-- header end -->
    
        <!-- main content start -->
        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="cover-heading">Datos del prospecto:</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="mx-auto"> -->
                                <div class="mx-auto card text-white bg-dark" style="max-width: 18rem;">
                                    <div class="card-header">Datos de Contacto</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nombre: '.$name.'</h5>
                                        <p class="card-text">Tel&eacute;fono: '.$phone.'</p>
                                        <p class="card-text">Correo: '.$email.'</p>
                                        <p class="card-text">Mensaje: '.$message.'</p>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- main content end-->
    
        <!-- footer start -->
        <footer class="footer text-muted text-center text-small">
            <p>www.craftydistribution.com</p>
        </footer>
    
        <!-- Scripts de Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
    </body>
    
    </html>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("Location: ../index.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}