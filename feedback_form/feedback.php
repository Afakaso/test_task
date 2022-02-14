<?php
$email = $_POST["email"];
$send = mail ($email,$header,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
    {echo "Message sent";}
else {echo "Something went wrong";}
?>