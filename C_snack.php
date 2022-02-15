<!-- 
Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->

<?php

$container_rand = [];
$turn = 1;

do
{
    
    $ran_num = rand(1 , 15);
    
    if ( !in_array( $ran_num , $container_rand) )
    {
        $container_rand[] = $ran_num;
        $turn++;
    }

} while($turn <= 15);

var_dump($container_rand);

?>