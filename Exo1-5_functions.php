<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<section class="question 1">
<h1>Question 1</h1>
    <p>Créer une fonction from scratch qui s'appelle verificationPassword().</p>
    <p>Elle prendra un argument de type string.</p>
    <p>Elle devra retourner un boolean qui vaut true si le password fait 8 caractères ou plus et false si il
    fait moins.</p>

    <h3>Résolution</h3>
<?php

function verificationPassword($a){
    $b = strlen($a);
    if ($b<8){
        return "false";
    } else {
        return "true";
    }
}
echo verificationPassword("azertyuio");

?>
</section>
<hr>
<section class="Question 2">
<h1>Question 2</h1>
    <p>On améliore la verificationPassword() écrite précédemment. </p>
    <p>Elle prend toujours un argument de type string.</p>
    <p> Elle devra désormais retourner un boolean qui vaut true si le password respecte toutes les règles suivantes:</p>
        <ul>
            <li> Faire au moins 8 caractères</li>
            <li> Avoir au moins 1 chiffre</li>
            <li> Avoir au moins une majuscule et une minuscule</li>
            <li>Et false dans tous les autres cas.</li>
        </ul>
    <h3>Résolution</h3>
<?php

function verificationPasswordA($a) {
    if (strlen($a)>8 && ctype_digit($a)>0 && ctype_upper($a)>0 && ctype_lower($a)>0){
        return "true";
    }else {
        return "false";
    }
}
echo verificationPasswordA("ufghJfhe8u2gSer");

?>
</section>
<hr>
<section class="Question 3">
<h1>Question 3</h1>
    <p>Créer une fonction from scratch qui s'appelle capital(). </p>
    <p>Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des
        pays suivants :</p>
    <ul>
        <li>France ==> Paris</li>
        <li>Allemagne ==> Berlin</li>
        <li>Italie ==> Rome</li>
        <li>Maroc ==> Rabat</li>
        <li>Espagne ==> Madrid</li>
        <li>Portugal ==> Lisbonne</li>
        <li>Angleterre ==> Londres</li>
        <li>Tout autre pays ==> Inconnu</li>
    </ul>
    <p>Il faudra utiliser la structure SWITCH pour faire cette exercice.</p>
    <p><em>Bonus : Faîtes en sorte de gérer le nom nom des pays indépendamment de la
            casse (majuscules/minuscules).</em></p>
    <h3>Résolution</h3>
<?php

function capital($c) {
    switch($c) {
        case "France" :
            echo "Paris";
        break;
        case "Allemagne":
            echo "Berlin";
        break;
        case "Italie":
            echo "Rome";
        break;
        case "Maroc":
            echo "Rabat";
        break;
        case "Espagne":
            echo "Madrid";
        break;
        case "Portugal":
            echo "Lisbonne";
        break;
        case "Angleterre":
            echo "Londres";
        break;
        default:
        echo "Inconnu";
    }
}
echo capital("Italie");

?>
</section>
<hr>
<section class="Question 4">
<h1>Question 4</h1>     <!--Refaire la question 4 et revoir les tableaux-->
    <p>Créer une fonction from scratch qui s'appelle listHTML().</p>
    <p>Elle prendra deux arguments :</p>
        <ol>
            <li>Une string représentant le nom de la liste</li>
            <li>Un array représentant les éléments de cette liste</li>
        </ol>
    <p>Elle devra retourner une liste HTML.</p>
    <p>Chaque element de cette liste viendra du tableau passé en paramètre.</p>
    <p>Exemple :</p>
        <ul>
            <li>Argument titre : "Capitale"</li>
            <li>Argument liste : ["Paris", "Berlin", "Moscou"]</li>
        </ul>
    <h3>Résultat : Capitale</h3>
   <ul>
        <li>Paris</li>
        <li>Berlin</li>
        <li>Moscou</li>
    </ul>

<p>Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne
entre les éléments de la liste. Pas d'espace non plus entre le titre et la liste.</p>
<p>Contraintes :
    <ul>
        <li>Si le titre est null ou vide, il faut que la fonction retourne null.</li>
        <li>Si l'array est vide (0 élément), il faut que la fonction retourne null.</li>
    </ul>
<h3>Résolution</h3>
<?php



?>
</section>
<hr>
<section class="Question 5">
<h1>Question 5</h1>
    <p>Créer une fonction from scratch qui s'appelle remplacerLesLettres().</p>
    <p>Elle prendra un argument de type string.</p>
    <p>Elle devra retourner cette même string mais en remplaçant les "e" par des "3", les "i" par des "1" et les
    "o" par des "0"</p>
    <p>Exemple :</p>
        <ul>
            <li>argument : "Bonjour les amis" ==> Output : "B0nj0ur l3s am1s"</li>
            <li>argument : "La programmation Web est trop cool" ==> Output : "La
            pr0grammat10n W3b 3st tr0p c00l"</li>
        </ul>
<h3>Résolution</h3>
<?php

function remplacerLesLettres($l){
    $l=str_replace("e","3",$l);
    $l=str_replace("i","1",$l);
    $l=str_replace("o","0",$l);
    echo $l;
}
echo remplacerlesLettres("Une phrase avec des e, des i et des o");

?>
</section>
<hr>
<section class="Question 6">
    <h1>Question 6</h1>
    <p>Créer une fonction from scratch qui s'appelle quelleAnnee(). </p>
    <p>Elle devra retourner un integer représentant l'année actuelle.</p>
    <p>Cherchez en PHP comment on intéragit avec les dates !</p>
    <h3>Résolution</h3>
<?php

function quelleAnnee($z){
    echo $z;
}
echo quelleAnnee(date('Y'));

?>
</section>
<hr>
<section class="Question 7">
    <h1>Question 7</h1>
        <p>Créer une fonction from scratch qui s'appelle quelleDate(). </p>
        <p>Elle devra retourner une string représentant la date actuelle sous le format suivant
        DD/MM/YYYY Où DD représente le jour actuel, MM le mois actuel et YYYY l'année
        actuelle. </p>
        <p>Là encore, cherchez comment en PHP on intéragit avec les dates.</p>
    <h3>Résolution</h3>
<?php

function quelleDate($str){
    $str = date('d/m/Y');
    echo $str;
}
echo quelleDate(0);

?>
</section>
</body>
</html>