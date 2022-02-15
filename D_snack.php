<!-- 
Prendere un paragrafo abbastanza lungo,
contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.

Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.










-->

<?php

$content = "Noi siamo un paese senza memoria. Il che equivale a dire senza storia. Se l’Italia avesse cura della sua storia, della sua memoria, si accorgerebbe che i regimi non nascono dal nulla. Sono il portato di veleni antichi, di metastasi invincibili.";
$replace = explode("." , $content);
$point = ". ";


for ($i = 0; $i < count($replace); $i++)
{
    echo '<p>' . $replace[$i] .= $point . '</p>';
}

?>



