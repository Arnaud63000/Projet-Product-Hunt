<?php
    include 'connect.php';



$vote = $bdd->query('UPDATE votes 
                    SET vote = vote + 1 
                    WHERE nom_produit ="'.$_POST['vote-btn'].'"');
                  

if(!$vote) {    
     die("Erreur mysql : ".$bdd->errorInfo()[2]); }
