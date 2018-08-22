<?php
    include 'includes/connect.php';
    
?>


     <!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="css/commentaire.css">

    <?php
        $produit = $bdd->query('SELECT * FROM produits WHERE id='.$_GET['id'].' ORDER BY id');

        while($donnees = $produit->fetch())
        {          
        ?>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="jumbotron">
                            <img src=<?=$donnees['logo']?>>
                            <?=$donnees['nom_produit'];  ?>
                         </div>
                    </div>
                </div>
            </div>
        <?php
        }
        $produit->closeCursor();
        ?>