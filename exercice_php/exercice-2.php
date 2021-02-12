<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
<h1>Exercice 2</h1>
<p>Trouver la position de la dernière occurrence de Stage pour le groupe 19001.</a>

<p>Cet exercice est issu d'un cas réel de développement d'une application de gestion de plannings.</p>

<p>Le tableau $a ci-dessous représente les plannings de groupes de stagiaires.</p>
<p>Le code 19XXX représente le numéro de groupe.</p>
<p>Les positions correspondent aux numéros de semaines dans l'année (peu importe quelle année).</p>
<p>Les valeurs vides ("") en début et fin de tableau indiquent respectivement que la formation n'a pas commencé / est terminée.</p>
<p>Quand une formation a débuté, les cellules vides indiquent des vacances.</p>
<code>$a = array(
    <p>"19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), </p>
    <p>"19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), </p>
    <p>"19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") </p>
    );
    </code>

    <?php
    //tableau
    $a = array(
    "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
    "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
    "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
   );
   $semaine = count($a[19001]);
   $i = -1;
   while ($a[19001][++$i] != "Stage");//on boucle jusqu'à la premiére occurence stage sa donne position 10
   $occ = array_count_values($a[19001]);// compte le nombre d'occurence
$nombre  =  $occ['Stage'] + $i ;// on additionne le nombre de fois que ressort stage + $i
   echo 'Trouver la position de la dernière occurrence de Stage pour le groupe 19001. ?<br>
   la dernière période de stage aura lieu semaine '.$nombre.'/'.$semaine.' Semaines' ;
   ?>
</body>
</html>