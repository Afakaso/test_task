<?php
$message = $_POST["message"];
$name = $_POST["name"];
$email = $_POST["email"];
$file = $_POST["file"];
$send = mail ($email,$header,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

$new_mes = 'messages/'. $name . '.txt'; 
$f = fopen($new_mes, 'w'); 
    fwrite($f, "\nИмя: ".$name."\nEmail: ".$email."\nСообщение: ".$message."\nФайл: ". 'messages/'. $file."\n");
fclose($f);

if ($send == 'true')
    {echo "Message sent";}
else {echo "Something went wrong";}
?>