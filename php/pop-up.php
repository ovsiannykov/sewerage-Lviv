<?php  


$to = "9biosfera@gmail.com";
$subject = "Письмо с сайта";
$charset = "utf-8";
$headerss ="Content-type: text/html; charset=$charset\r\n";
$headerss.="MIME-Version: 1.0\r\n";
$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
$msg = "Имя: ".$_POST["name"]."\n";$msg .= "Телефон: ".$_POST["phone"]."\n";
mail($to, $subject, $msg, $headerss);
header('Location: ../Thanks.html');

?>