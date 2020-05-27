<?php

$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$note=$_POST['note'];

$to = "giupanbis@hotmail.it" ;
$subject = "Form sito" ;
$headers = "from: .$email";

 $txt .=  "Nome: " . $nome . "\r\n";
 $txt .=  "Cognome: " . $cognome . "\r\n";
 $txt .=  "Telefono: " . $telefono . "\r\n";
 $txt .=  "Email: " . $email . "\r\n";
 $txt .=  "Note: " . $note . "\r\n";


mail("$to","$subject","$txt","$headers");

 echo"<script type='text/javascript'>alert('La mail è stata inviata correttamente');
      window.history.log(-1);
    </script>";

 echo "<meta http-equiv='Refresh' content='1; URL=index.html'>";

?>
