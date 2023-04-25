<?php
 class user
 {
  private $name;
  private $email;
  private $msg;
  function __construct($nom,$mail,$ms)
  {
    $this->name=$nom;
    $this->email=$mail;
    $this->msg=$ms;
  }
  function EnvoiyeeEmail()
  {
    require 'mail.php';
    $mail->setFrom($this->email,$this->name); // Adresse e-mail de l'expéditeur
    $mail->addAddress('issamman764@gmail.com', 'AISSAMMAN'); // Adresse e-mail du destinataire
    $mail->Subject = "My Email is $this->email And My name is $this->name"; // Objet de l'e-mail
    $mail->Body = $this->msg; // Corps de l'e-mail
     $mail->send() ;    
  }
 }






?>