<?php
  @$nom=$_POST["nom"];
  @$Envoyer=$_POST["Envoyer"];
  @$email=$_POST["email"];
  use PHPMailer\PHPMailer\PHPMailer;  
  if(isset($Envoyer)){
    if(empty($email)){
      echo 'formulaire invalide';
      
    } 
    else{

      echo "formuaire envoyé";
      require_once 'PHPMailer/Exception.php';
      require_once 'PHPMailer/PHPMailer.php';
      require_once 'PHPMailer/SMTP.php';
      $mail =new PHPMailer();
      $mail->isSMTP();  
      $mail->SMTPAuth = TRUE;
      $mail->SMTPSecure = "ssl";
      $mail->Port = 465;
      $mail->Host = "smtp.gmail.com";
      $mail->Username='asedsglam@gmail.com';
      $mail->Password='12345678';
      $mail->IsHTML(true);
      $mail->setForm($email, $nom);
      $mail->subject='formulaire envoyé';
      $mail->AddAdress($email);
      if($mail->Send()){
        echo 'eail envoyé avec succés';
      }
      else{
        echo 'email non envoyé';
      }
    }
  }

?>