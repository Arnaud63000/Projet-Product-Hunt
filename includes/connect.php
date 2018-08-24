<?php
	
try

{

    // On se connecte à MySQL

    $bdd = new PDO('mysql:host=localhost;dbname=hunter_prod', 'root', '');

}

catch(Exception $e)

{

    // En cas d'erreur, on affiche un message et on arrête tout

        die('Erreur : '.$e->getMessage());

}

function queryOrDie($sql) {
    global $bdd;

    $result = $bdd->query($sql);

    if(!$result) {
        echo $sql."<br><br>";

        die('Erreur MySQL : '. $bdd->errorInfo()[2]);
    }

    return $result;
}


?>