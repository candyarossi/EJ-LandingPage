<?php

$destino = 'candeeyarossie@gmail.com';

$origen_name = $_POST['name'];

$origen_surname = $_POST['surname'];

$origen_email = $_POST['email'];

$subject = 'Mensaje desde la Landing Page';

$headers = 'From: ".$origen_name." ".$origen_surname." <".$origen_email.">\r\n Reply-To: ".$origen_email."\r\n Return-Path: ".$origen_name." ".$origen_surname." <".$origen_email.">\r\n';

$mensaje ='Hola';

$resultado = mail($destino, $subject, $mensaje, $headers);

if ($resultado) { 
echo "<script type='text/javascript'>window.location.href='http://avmartinmalharro.edu.ar/dweb/4a/2019/YAROSSI/LandingPage/index2.html';</script>";
}else{
echo "<script type='text/javascript'>window.location.href='http://avmartinmalharro.edu.ar/dweb/4a/2019/YAROSSI/LandingPage/index3.html';</script>"; }

?>