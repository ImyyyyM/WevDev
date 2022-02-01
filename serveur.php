<?php
  @$nom=$_POST["nom"];
  @$Envoyer=$_POST["Envoyer"];
  @$email=$_POST["email"];
  use PHPMailer\PHPMailer\PHPMailer;  
  require'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';
  $mail =new PHPMailer();
  $mail->isSTMP();
  $mail->Mailer="stmp";
  $mail->SMTPDebug = 1;  
  $mail->SMTPAuth = TRUE;
  $mail->SMTPSecure = "ssl";
  $mail->Port = 465;
  $mail->Host = "smtp.gmail.com";
  $mail->Username='asedsglam@gmail.com';
  $mail->Password='12345678';
  $mail->subject='formulaire envoyé';
  $mail->IsHTML(true);

  $mail->AddAdress($email);
  $mail->Send();
  $message="";

  if(isset($Envoyer)){
      if(empty($email)){
        $message='formulaire invalide';
        echo $message
      } else{
        
        $mail->AddAdress(email);
       $mail->Send();
        echo "formuaire envoyé";
      }
  }

?>