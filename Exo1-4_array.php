<?php


$table = array('a','b','c','d','e');

function premierElementTableau($a=array()){
    if(count($a)>0){
        return $a[0];
    }
    else{
        return "null";
    }
}
echo premierElementTableau($table);
echo "<br />";

function dernierElementTableau($b=array()){
    $c = end($b);
    if(count($b)>0){
        return $c;
    }else{
        return "null";
    }
}
echo dernierElementTableau($table);
echo "<br />";


$tableA = array(1,2,3,4,5);

function plusGrand($a=array()){
    $b = max($a);
    if(count($a)>0){
        return $b;
    }else{
        return "null";
    }
}
echo plusGrand($tableA);
echo "<br />";

function plusPetit($c=array()){
    $d = min($c);
    if(count($c)>0){
        return $d;
    }else {
        return "null";
    }
}
echo plusPetit($tableA);


/*Question 1 :
Créer une fonction from scratch qui s'appelle premierElementTableau().
Elle prendra un argument de type array. Elle devra retourner le premier
élement du tableau.
Si l'array est vide, il faudra retourner null;
Question 2 :
Créer une fonction from scratch qui s'appelle dernierElementTableau().
Elle prendra un argument de type array. Elle devra retourner le dernier
élement du tableau.
Si l'array est vide, il faudra retourner null;
Question 3 :
Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra
un argument de type array. Elle devra retourner le plus grand des
élements présent dans l'array.
Si l'array est vide, il faudra retourner null;
Question 4 :
Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra
un argument de type array. Elle devra retourner le plus petit des
élements présent dans l'array.
Si l'array est vide, il faudra retourner null;*/

?>