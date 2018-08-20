<!doctype html>
<html lang="fr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Projet Product-Hunt</title>
  </head>
<body>
  <div class="container-fluid">
        <div class="row">
            <?php 
                include 'includes/menu.php';
            ?>
            <div class="jumbotron col-10">
                <img src="images/logo.png" id="logo">
                <h1 class="display-4">Hunter-Prod</h1>
                <p class="lead"></p>
                    <hr class="my-4">
                        <div class="populaire">
                            <div class="header">TOP 3 des produits les plus populaires ce mois-ci</div>
                            <hr class="separateur2">
                                 <div class="images">
                                    <img src="images/youtube.png" id="img-yt" alt="images-youtube">
                                 </div>
                                    <div class="titre">
                                        <h2>Youtube</h2>
                                    </div>
                                        <div class="text">
                                            <h3>La meilleure plateforme de partages de vidéos!</h3>
                                            <a href="video.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Video</a>
                                            <a type="button" class="btn btn-dark" id="btn-vote">&#x25B2;UpVote</a>
                                            <a type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></a>
                                        </div>
                                              <hr class="separateur">
                                              
                                        <div class="images2">
                                            <img src="images/facebook.png" id="img-fb" alt="images-facebook">
                                        </div>
                                    <div class="titre2">
                                        <h2>Facebook</h2>
                                    </div>
                                        <div class="text2">
                                            <h3>Le meilleur réseaux social!</h3>
                                            <a href="techno.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Techno</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2; UpVote</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></a>
                                        </div>
                                        <hr class="separateur">

                                     <div class="images3">
                                        <img src="images/deezer.png" id="img-dz" alt="images-deezer">
                                    </div>
                                        <div class="titre3">
                                            <h2>Deezer</h2>
                                        </div>
                                        <div class="text3">
                                            <h3>La meilleure plateforme de musiques!</h3>
                                            <a href="video.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Music</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2; UpVote</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></a>
                                        </div>
                                    </div>                    
            </div>
        </div>  
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
