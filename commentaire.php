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
</head>

    <?php
        $produit = $bdd->query('SELECT * FROM produits WHERE id='.$_GET['id'].' ORDER BY id');

        while($donnees = $produit->fetch())
        {          
        ?>
            
                <div class="header">
                    <div class="info-page">
                        <h1>Fiche technique <?=$donnees['nom_produit']?></h1>
                    </div>
                </div>
                <div class="jumbotron">
                    <img src=<?=$donnees['logo']?>>
                    <br><br>
                    <div class="desc-produit">
                        <h3>Description:</h3>
                        <p><?=utf8_encode($donnees['description'])?></p>
                    </div>
                </div>

        <?php
        }
        $produit->closeCursor();
        ?>
             <div class="jumbotron espace-com">
                    <h4>Espace commentaire</h4>
                    <div class="zone-commentaire">



                     <div class="formulaire">
                        <form action="" method="POST" class="form-com">
                            <input type="text" name="pseudo" placeholder="Votre pseudo"><br>
                            <input type="text" name="commentaire" placeholder="Votre commentaire"><br>
                            <button type="submit" name="btn-com" class="btn-send">Envoyer</button>
                        </form>
                    </div>
                </div>
           
                    <?php
              
                        $pseudo = $_POST['pseudo'];
                            $commentaires = $_POST['commentaire'];
                            $produits = $_GET['id'];
                                            
                        $message = $bdd->query('INSERT INTO messages(id, pseudo, commentaires) VALUES("'.$_GET['id'].'", "'.$_POST['pseudo'].'","'.$_POST['commentaire'].'")');

                        ?>
                                                
                        <?php      
                        $messages = queryOrDie('SELECT * FROM messages LEFT JOIN produits ON produits.id = messages.id WHERE messages.id='.$_GET['id']);

                        while ($reponse = $messages->fetch())
                        {
                        ?>
                        <p><?=$reponse['pseudo']?> : <?=$reponse['commentaires']?></p><br>
                        
                        <?php
                        }

                        ?>
                                            
                    
               

                  