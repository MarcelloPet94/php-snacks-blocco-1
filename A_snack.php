<!-- 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->

<?php


$squadre = [
    "reggiana - universo treviso",
    "bolognna - brindisi",
    "derthona - trento",
    "venezia - varese"
];

$punti = [
    "67 - 62",
    "67 - 72",
    "76 - 50",
    "67 - 62"
];


for ($i = 0; $i < count($squadre); $i++)
{
    echo $squadre[$i] . " | " . $punti[$i] . "<br>";
}

?>