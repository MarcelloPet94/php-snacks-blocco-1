<!-- 
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php

$nome = $_GET['n'];
$email = $_GET['e'];
$age = $_GET['a'];

$verify_n = strlen($nome) >= 3;
$verify_e = strpos( $email , "@") && strpos( $email , ".");
$verify_a = is_numeric($age);


if( $verify_n && !$verify_e && $verify_a )
{
    echo "Accesso negato";
}
else
{
    echo "Accesso riuscito";
}
?>