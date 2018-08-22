


<div class="modal fade" id="youtubemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modal">
            <div class="modal-header">
                <img src="images/youtube.png" id="logo">
                <a href="http://www.Youtube.com" target="blank">
                    <h5 class="modal-title" id="exampleModalLabel"><?=$produit["titre"]?></h5>
                </a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/Youtube-modal.PNG">
                <div id="btn-com" class="btn-com">
                    <hr class="separateur">
                    <br>
                <form action="index.php" method="post" class="form-com">
                    <input type="text" name="pseudo" placeholder="Votre Pseudo"><br>
                    <input type="textarea" name="message" placeholder="Votre commentaire"><br>
                    <button type="sumbit">Envoyez</button>
                </form>
                <div class="zone-com">
                    jgdhgjsjgsdhk
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="includes/vote.php?id=" class="btn btn-dark" id="modal-vote">&#x25B2;<?php echo $number; ?></button>
                <button type="button" class="btn btn-dark" id="btn-com" class="btn-com"><img src="images/commentaire.png" id="commentaire"></button>
                <button type="button" class="btn btn-secondary" id="quit-btn" data-dismiss="modal">Quitter</button>
            </div>
        </div>
    </div>
</div>