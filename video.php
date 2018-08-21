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
                <img src="images/logo.png" id="logo-principale">
                <h1 class="display-4">Hunter-Prod</h1>
                <p class="lead"></p>
                    <hr class="my-4">
                        <div class="populaire">
                            <div class="header">Video</div>
                            <hr class="separateur">
                            <div id="config-block" data-toggle="modal" data-target="#youtubemodal">
                                 <div class="images">
                                    <img src="images/youtube.png" id="img-yt" alt="images-youtube">
                                 </div>
                                    <div class="titre">
                                        <h2>Youtube</h2>
                                    </div>
                                        <div class="text">
                                            <h3>La meilleure plateforme de partages de vidéos!</h3>
                                            <a href="video.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Video</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2;UpVote</button>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></button>
                                        </div>
                                        </div>
                                              <hr class="separateur">
                                              <div id="config-block" data-toggle="modal" data-target="#twitchmodal">
                                        <div class="images">

                                            <img src="images/twitch.png" id="img-fb" alt="images-facebook">
                                        </div>
                                    <div class="titre">
                                        <h2>Twitch</h2>
                                    </div>
                                        <div class="text">
                                            <h3>Le meilleur du stream!</h3>
                                            <a href="video.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Video</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2; UpVote</button>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></button>
                                        </div>
                                        </div>
                                        <hr class="separateur">
                                        <div id="config-block" data-toggle="modal" data-target="#dailymodal">
                                     <div class="images">
                                        <img src="images/dailymotion.png" id="img-dz" alt="images-deezer">
                                    </div>
                                        <div class="titre">
                                            <h2>Dailymotion</h2>
                                        </div>
                                        <div class="text">
                                            <h3>Explorez et regardez des videos en ligne!</h3>
                                            <a href="video.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Video</a>
                                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2; UpVote</button>
                                            <button type="button" class="btn btn-dark" id="btn-vote"><img src="images/commentaire.png" id="commentaire"></button>
                                        </div>
                                </div>
                                    </div>      
         </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Modal YOUTUBE-->


    <div class="modal fade" id="youtubemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal">
                <div class="modal-header">
                    <img src="images/youtube.png" id="logo">
                    <a href="http://www.youtube.com" target="blank">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube</h5>
                    </a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="images/Youtube-modal.PNG">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" id="modal-vote">&#x25B2;UpVote</button>
                    <button type="button" class="btn btn-secondary" id="quit-btn" data-dismiss="modal">Quitter</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Modal -->

    <!-- Modal TWITCH-->


    <div class="modal fade" id="twitchmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal">
                <div class="modal-header">
                    <img src="images/twitch.png" id="logo">
                    <a href="http://www.twitch.com" target="blank">
                        <h5 class="modal-title" id="exampleModalLabel">Twitch</h5>
                    </a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="images/twitch-screen.PNG">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" id="modal-vote">&#x25B2;UpVote</button>
                    <button type="button" class="btn btn-secondary" id="quit-btn" data-dismiss="modal">Quitter</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Modal -->

    <!-- Modal DAILYMOTION-->


    <div class="modal fade" id="dailymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal">
                <div class="modal-header">
                    <img src="images/dailymotion.png" id="logo">
                    <a href="http://www.dailymotion.com" target="blank">
                        <h5 class="modal-title" id="exampleModalLabel">Dailymotion</h5>
                    </a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="images/daily-screen.PNG">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" id="modal-vote">&#x25B2;UpVote</button>
                    <button type="button" class="btn btn-secondary" id="quit-btn" data-dismiss="modal">Quitter</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Modal -->

</body>
</html>