<?php
    header("Content-Type: text/html; charset=utf-8");



$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message_add=$_POST['message_add'];









    $to = "info@vistabio.ru"; /*Укажите адрес, на который должно приходить письмо*/
    $sendfrom   = "mail@vistabio.ru"; /*Укажите адрес, с которого будет приходить письмо*/

    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To:" . strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "Заявка с сайта vistabio.ru";
    $message = "<html>
	<body>
	<b>Заявка с сайта vistabio.ru</b><br>
	<table border='1px' style='border-color: #666; border-collapse: collapse;' cellpadding='5'>
	<tr><td><strong>Имя:</strong> </td><td>$name</td></tr>

<tr><td><strong>Телефон:</strong> </td><td>$phone</td></tr>
<tr><td><strong>Почта:</strong> </td><td>$email</td></tr>
<tr><td><strong>Дополнительные пожелания:</strong> </td><td>$message_add</td></tr>
</table></body></html>";

echo $message;

    $send = mail ($to, $subject, $message, $headers);
echo $send;
    if ($send == 'true')
    {
 echo header("Location: ./thanks.html");;
	
    }
    else
    {
    echo '<script type="text/javascript">document.getElementById("form-danger").removeAttribute("hidden");</script>';
    }


/**/

?>
