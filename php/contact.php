<?php  

$to = "9biosfera@gmail.com";
$subject = $_POST['subject'];;
$charset = "utf-8";
$headerss ="Content-type: text/html; charset=$charset\r\n";
$headerss.="MIME-Version: 1.0\r\n";
$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";



$msg = "Имя: ".$_POST["name"]."\n";$msg = "Телефон: ".$_POST["phone"]."\n";$msg .= "Сообщение: ".$_POST["comments"]."\n";
mail($to, $subject, $msg, $headerss);
header('Location: ../Thanks_2.html');


?>