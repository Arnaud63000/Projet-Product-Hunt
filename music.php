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
                            <div class="header">Musiques</div>
                            <hr class="separateur2">
                            <br>
                                 <div class="images">
                                    <img src="images/spotify.png" id="img-yt" alt="images-youtube">
                                 </div>
                                    <div class="titre">
                                        <h2>Spotify</h2>
                                    </div>
                                        <div class="text">
                                            <h3>De la musique pour tous!</h3>
                                            <a href="music.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Music</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2;UpVote</button>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></button>
                                        </div>
                                              <hr class="separateur">
                                              
                                        <div class="images2">
                                            <img src="images/Logo_TYPOS.png" id="img-fb" alt="images-facebook">
                                        </div>
                                    <div class="titre2">
                                        <h2>Typos</h2>
                                    </div>
                                        <div class="text2">
                                            <h3>Ecoutez de la musique avec passion</h3>
                                            <a href="music.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Music</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2; UpVote</button>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></button>
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
                                            <a href="music.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Music</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2; UpVote</button>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></button>
                                        </div>
                                    </div>      
         </div>
</div>
</body>
</head>
</html>