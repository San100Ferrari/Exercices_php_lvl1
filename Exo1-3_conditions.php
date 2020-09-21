<?php 


function estIlMajeur($a){
    if ($a>=18){
        return "true";
    } else{
        return "false";
    }
}
echo estIlMajeur(21);
echo "<br />";

function plusGrand($a,$b){
    if ($a>$b){
        return $a;
    } else{
        return $b;
    }
}
echo plusGrand(7,5);
echo "<br />";

function plusPetit($a,$b){
    if($a<$b){
        return $a;
    }else{
        return $b;
    }
}
echo plusPetit(6,5);
echo "<br />";

function lePlusPetit($a,$b,$c){
    if($a<$b && $a<$c){
        return $a;
    }else if($b<$a && $b<$c){
        return $b;
    }else{
        return $c;
    }
}
echo lePlusPetit(8,3,5);


/*Question 1 :
Créer une fonction from scratch qui s'appelle estIlMajeur(). Elle prendra
un argument de type int. Elle devra retourner un boolean.
Si age >= 18 elle doit retourner true
si age < 18 elle doit retourner false
Exemple :
age = 5 ==> false
age = 34 ==> true
Question 2 :
Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra
deux arguments de type int. Elle devra retourner le plus grand des deux.
Question 3 :
Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra
deux arguments de type int. Elle devra retourner le plus petit des deux.
Question 4 :
Créer une fonction from scratch qui s'appelle lePlusPetit(). Elle prendra
trois arguments de type int. Elle devra retourner le plus petit des
trois.*/
?>