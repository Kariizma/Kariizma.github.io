<?php

if(isset($_POST['submit']))
    {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Message = $_POST['Message'];
    }

$mailTo = "karanvadhan789@gmail.com";
$headers = "From ".$Email;
$txt = "You have received an email from ".$Name.".\n\n".$Message;

mail($mailTo, $headers, $txt);
header("Location: index.html?mailsend");



?>