<?php 
// ob_start("ob_gzhandler");
// require('SetVar.php');
//** Importez les classes PHPMailer dans l'espace de noms global
//** Celles-ci doivent être en haut de votre script, pas à l'intérieur d'une fonction
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './src/Exception.php';
require './src/PHPMailer.php';
require './src/SMTP.php';

// *************
// Le contenu agissant de cette page est soumis à plusieurs test sur le fonctionnement du fomulaire envoyé par l'utilisateur à partir de min-contact
// *************
$ban_chars = array("#","+","*","\\","|","_","[","]","{","]","=","<",">");

session_start();

//** PROTECTION contre l'affichage de la page _Sendmail sans qu'elle soit appellée par le formulaire *//
//** Test si la variable Sendmail à été envoyée par le formulaire.
if(isset($_POST['Sendmail'])){
    if(isset($_POST['norobot'])){   //** Test si la variable du bouton est présente
        if($_POST['norobot'] == 'true'){
            // *********** Variables reçues du formulaire *************
            $nom = urldecode($_POST['name']);
            $nom = utf8_encode($nom);
            // $nom = utf8_encode($_POST['name']);

            $email = urldecode($_POST['email']);
            $email = utf8_encode($email);
            // $nom = utf8_encode($_POST['email']);

            $message = urldecode($_POST['message']);
            $message = stripslashes($message);
            $message = str_replace($ban_chars, "", $message);
            $message = str_replace("\n", "<br/>", $message);

            // $AddAttac = "img\CV_Florent_BOUTONNET.pdf";
            // $message = utf8_encode($message);

            $mail = new PHPMailer(true);                              // Passer `true` active les exceptions
            try {
                // Paramètres du serveur d'envoi
                $mail->SMTPDebug = 0;                       // Activer la sortie de débogage détaillé Mettre à 0 en prod Mettre à 2 en dev
                $mail->isSMTP();                                      // Configurez mailer pour utiliser SMTP
                $mail->Host = 'smtp.gmail.com';  					  // Spécifiez les serveurs SMTP principaux et de sauvegarde
                $mail->SMTPAuth = true;                               // Activer l'authentification SMTP
                $mail->Username = 'me';         // Nom d'utilisateur SMTP
                $mail->Password = 'secret';                                 // Mot de passe SMTP
                $mail->SMTPSecure = 'tls';                            // Activer le cryptage TLS, `ssl` a également accepté
                $mail->Port = 587;                                    // Port TCP auquel se connecter (465 pour gmail)

                // autres paramètre : smtp gmail tls 587
                // autres paramètre : smtp gmx nosecure 25 / 465

                //$mail->CharSet = "utf-8";

                // Destinataires
                $mail->setFrom($mail->Username, utf8_decode($nom)); // infos données de l'envoi, le 2eme paramètre correspond au nom qui est affiché dans le rappel des partis dans le corps du mail.
                $mail->addAddress($mail->Username, '[Mailer] - '.utf8_decode($nom)); // Ajouter un destinataire, le 2eme paramètre correspond au nom qui apparait dans l'en-tête du mail
                // $mail->addAddress('ellen@example.com');               // Le nom est facultatif
                $mail->addReplyTo($email, $nom);
                // $mail->addCC('cc@example.com');						// Copie carbonne
                // $mail->addBCC('cci@example.com');		            // Copie carbonne invisible

                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Ajouter des pièces jointes avec le chemin complet avec un nom (Nom facultatif)

                // Contenu
                $mail->isHTML(true);                                    // Définissez le format de l'e-mail sur HTML
                // $mail->Subject = utf8_decode($sujet);
                $mail->Subject = 'Message de '.utf8_decode($nom);
                $mail->Body = 'Message de :<br>&emsp;&emsp;'.utf8_decode($nom).'<br>&emsp;&emsp;<em>'.utf8_decode($email).'</em><br><br>'.utf8_decode($message);
                // $mail->AltBody = 'Ceci est le corps en texte brut pour les clients de messagerie non HTML';
                $mail->send();

                //** message en html que l'internaute recevra et verra après l'envoi du mail
                // include 'Msg_to_Sender_Ok.php';
                // echo '<p>Votre message a bien été envoyé</p>';
                echo 'Success';

                // AUTRES CODES
                // if(!$mail->send()) {
                //     echo 'Erreur, message non envoyé.';
                //     echo 'Mailer Error: ' . $mail->ErrorInfo;
                //  } else {
                //     echo 'Le message a bien été envoyé !';
                //  }

            } catch (Exception $e) {
                // message en html en cas d'erreur SMTP
                // echo $mail->ErrorInfo;
                echo 'FailMailService';
            }
        } else { /// Si la valeur du captcha n'est pas valide :
            // var_dump ($request_content);
            // var_dump($captchaServerResponse); // instruction de test du captcha
            echo 'FailAntiRobot';
        }
    } else {   //** Si la variable captcha n'est pas présente
        echo 'NoAntiRobot';
    } //** Fin du Test si la variable Sendmail est présente (ligne 13)
} else {
    echo 'FailForm';
}
session_destroy();
?>