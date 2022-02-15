<!-- 
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php


$alunni = [
    [
        "nome" => "Giac",
        "cognome" => "Jo",
        "voti" => [4, 5, 6, 7]
    ],
    [
        "nome" => "Al",
        "cognome" => "Ole",
        "voti" =>
        [ 10, 7, 8, 6 ],
        
    ],
    [
        "nome" => "Jane",
        "cognome" => "Joun",
        "voti" =>
        [ 4, 4, 5, 6 ],
        
    ]    

];


for($i = 0; $i < count($alunni); $i++)
{
    $media = array_sum($alunni[$i]["voti"]) / count($alunni[$i]["voti"]);
    echo "<p>" . $alunni[$i]["nome"] . " " . $alunni[$i]["cognome"] . " " . $media . "</p>";
}


?>



