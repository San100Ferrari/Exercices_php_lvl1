<?php

    
    function helloWorld(){
        return "Hello World!";
    }
    echo helloWorld(); //sert à appeler la fonction sinon elle ne s'exe pas
    echo "<br>"; //permet d'aller à la ligne en utilisant <br />

    function quiEstLeMeilleurProf(){
        return "Mon super formateur de dev web";
    }
    echo quiEstLeMeilleurProf();
    echo "<br />";

    function jeRetourneMonArgument($abc){
        return $abc;
    }
    echo jeRetourneMonArgument(123);
    echo"<br />";

    function concatenation($a, $b){
        $result = $a.$b;
        return $result;
    }
    echo concatenation("Kingsley", "Coman");
    echo "<br />";

    function concatenationAvecEspace($c, $d){
        $result = $c." ".$d;
        return $result;
    }
    echo concatenationAvecEspace("Manuel", "Neuer");
    echo "<br />";


/*Question 1 :
Faite en sorte que la fonction HelloWorld retourne exactement la valeur
Hello World!
<?php
function helloWorld(){
return "Texte à afficher";
}
?>
Question 2 :
Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf().
Elle doit retourner "Mon super formateur de dev web"
Question 3 :
Créer une fonction from scratch qui s'appelle jeRetourneMonArgument().
Exemple : argument = "abc" ==> return abc
arg = 123 ==> return 123
Question 4 :
Créer une fonction from scratch qui s'appelle concatenation(). Elle
prendra deux arguments de type string. Elle devra retourner la
concatenation des deux.
Exemple :
argument 1 = "Kingsley"
argument 2 = "Coman"
Resultat : "KingsleyComan"
Question 5 :
Créer une fonction from scratch qui s'appelle concatenationAvecEspace().
Elle prendra deux arguments de type string. Elle devra retourner la
concatenation des deux avec un espace entre les deux.
Exemple :
argument 1 = "Manuel"
argument 2 = "Neuer"
Resultat : "Manuel Neuer"*/
?>
