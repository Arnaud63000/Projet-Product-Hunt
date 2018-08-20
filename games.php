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
        <div class="container">
         <div class="jumbotron col-10 col-lg-11 col-md-10 col-sm-10">
                <img src="images/logo.png" id="logo">
                <h1 class="display-4">Hunter-Prod</h1>
                <p class="lead"></p>
                    <hr class="my-4">
                        <div class="populaire">
                            <div class="header">Jeux Video</div>
                            <hr class="separateur2">
                                 <div class="images">
                                    <img src="images/jeuxvideopointcom.png" id="img-yt" alt="images-JVC">
                                 </div>
                                    <div class="titre">
                                        <h2>JeuxVideo.com</h2>
                                    </div>
                                        <div class="text">
                                            <h3>Forum de jeux vidéo</h3>
                                            <a href="games.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Games</a>
                                            <a type="button" class="btn btn-dark" id="btn-vote">&#x25B2;UpVote</a>
                                            <a type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></a>
                                        </div>
                                              <hr class="separateur">
                                              
                                        <div class="images2">
                                            <img src="images/logoG2A.png" id="img-fb" alt="images-G2A">
                                        </div>
                                    <div class="titre2">
                                        <h2>G2A</h2>
                                    </div>
                                        <div class="text2">
                                            <h3>Clés jeux instantanées pas cher</h3>
                                            <a href="games.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Games</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2; UpVote</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></a>
                                        </div>
                                        <hr class="separateur">

                                     <div class="images3">
                                        <img src="images/instantgaming.png" id="img-dz" alt="images-IG">
                                    </div>
                                        <div class="titre3">
                                            <h2>InstantGaming</h2>
                                        </div>
                                        <div class="text3">
                                            <h3>Vos jeux PC & MAC  jusqu'à -70%</h3>
                                            <a href="games.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Games</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2; UpVote</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></a>
                                        </div>
                                    </div>      
         </div>
          </div>  
</div>
</body>
</head>
</html>