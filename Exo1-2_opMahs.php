<?php


function somme($a, $b){
    $result = $a+$b;
    return $result;
}
echo somme(5,6);
echo "<br />";

function soustraction($c,$d){
    $result = $c-$d;
    return $result;
}
echo soustraction(5,4);
echo "<br />";

function multiplication($e,$a){
    $result = $e*$a;
    return $result;
}
echo multiplication(5,4);


/*Question 1 :
Créer une fonction from scratch qui s'appelle somme(). Elle prendra deux
arguments de type int. Elle devra retourner la somme des deux.
Exemple :
argument 1 = 5
argument 2 = 6
resultat : 11
Question 2 :
Créer une fonction from scratch qui s'appelle soustraction(). Elle
prendra deux arguments de type int. Elle devra retourner la soustraction
des deux.
Exemple :
argument 1 = 5
argument 2 = 4
Resultat : 1
Question 3 :
Créer une fonction from scratch qui s'appelle multiplication(). Elle
prendra deux arguments de type int. Elle devra retourner la
multiplication des deux.
Exemple : argument 1 = 5
argument 2 = 4
Resultat : 20*/
?>