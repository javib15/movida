<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por... " . $name. " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "message: " . $_POST['message'] . " \r\n";
$mensaje .= "Fue enviado... " . date('d/m/Y', time());

$para = "info@movidasxm.site";
$asunto = 'client from web site movida';


mail($para, $asunto, utf8_decode($message), $header);


?>
</h2>
<h2 align="center">Thank you!</h2>

<p align="center">Your message has been sent correctly, we will contact you soon.</p>
<p align="center"> </p>
<p><span style="color:red;font-size:150%;font-weight:bold;"><?php print $email; ?></span></p>

<p align="center">If it is not correct,

<script type='text/javascript'>

document.write('<a href="https://www.movidasxm.site/">vuelve atras</a>');

</script>

<noscript>go back</noscript> and send it again</p>

<script type='text/javascript'>

document.write('<p class="details"><a href="https://www.movidasxm.site/">return to homepage.</a></p>');

</script>

<script type='text/javascript'>

setTimeout('https://www.movidasxm.site/', 9000);

</script>

<noscript>

<p align="center" class="details">Press the "back" button on your browser to return to the previous page.</p>

</noscript>