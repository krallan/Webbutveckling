<?php
echo "<pre>";
print_r($_POST);
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer();

$mail -> IsSMTP();
$mail ->Host = 'smtp.gmail.com';
$mail ->Port = 465;
$mail ->SMTPDebug = 2;
$mail ->SMTPAuth = true;
$mail ->Username = "krallzboy@gmail.com";
$mail ->Password = "eweygnmhgmdwjyzy";
$mail ->SMTPSecure = 'ssl';

$mail ->setFrom($_POST['sender']);
$mail ->addAddress($_POST['reciever']);
$mail ->addCC($_POST['secondReciever']);
$mail ->addBCC($_POST['thirdReciever']);

$mail ->isHTML(true);
$mail ->Subject = $_POST['title'];
$mail ->Body = $_POST['message']. "<p> Observera! Detta meddelande är sänt från ett formulär på Internet och avsändaren kan vara felaktig!
</p>";

$mail ->send();

echo $mail ->ErrorInfo;