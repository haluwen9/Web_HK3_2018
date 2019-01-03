<?php 
  
  use PHPMailer\PHPMailer\PHPMailer;

  include_once('plugins/PHPMailer/PHPMailer.php');
  include_once('plugins/PHPMailer/SMTP.php');                            // TCP port to connect to

  function loadContact() {
    include("views/contact.php");
  }

  function feedBack($name, $email, $sbj, $content) {
    try {
      $mail = new PHPMailer();

      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'in-v3.mailjet.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = '2a96eb0a669e22e1241b2e6bf44f5490';                 // SMTP username
      $mail->Password = 'ad93337b83911375c089236d7bb5f0d3';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;        

      $mail->setFrom("no-reply@bongxustore.cf","Bông Xù Store - No Reply");
      $mail->addAddress("admin@bongxustore.cf","Bông Xù Store");

      $mail->isHTML(true);
      $mail->CharSet = 'utf8';
      $mail->Subject = $sbj;
      $mail->Body = "$content<br>From: $name \<$email\>";

      $mail->send();

      return "Ý kiến đóng góp của quý khách đã được gửi.\nCảm ơn sự quan tâm của quý khách!";
    }
    catch (Exception $e){
      return "Gửi tin nhắn thất bại! Chi tiết lỗi: ".$mail->ErroInfo;
    }
  }

  function subscribe($email) {
    include_once('models/user_model.php');
    $um = new userModel();
    return $um->addSubscribtion($email);
  }
?>