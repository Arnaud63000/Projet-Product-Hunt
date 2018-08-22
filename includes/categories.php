<?php
$produit = $bdd->query('SELECT * FROM produits WHERE id_categories='.$_GET['id_categories'].' ORDER BY id_categories ASC LIMIT 0,3');

$i = 0;

while ($donnees = $produit->fetch()) {

?>
    <div id="config-block" data-toggle="modal" data-target="#modal<?=$i?>">
                        <div class="images">
                            <img src=<?=$donnees['logo']?> id="img-yt" alt="images-youtube">
                        </div>
                        <div class="titre">
                            <h2><?=$donnees['nom_produit']?></h2>
                        </div>
                        <div class="text">
                            <h3><?=utf8_encode($donnees['description'])?></h3>
                            <a href="index.php" type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;Video</a>
                            <button type="button" class="btn btn-dark" id="btn-vote">&#x25B2;UpVote</button>
                            <button type="button" class="btn btn-dark" id="btn-vote">
                                <img src="images/commentaire.png" id="commentaire">
                            </button>
                        </div>
                    </div>
                    <hr class="separateur">


                    <div class="modal fade" id="modal<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modal">
            <div class="modal-header">
                <img src=<?=$donnees['logo']?> id="logo">
                <a href=<?=$donnees['lien_site']?> target="blank">
                    <h5 class="modal-title" id="exampleModalLabel"><?=$donnees['nom_produit']?></h5>
                </a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src=<?=$donnees['photo_description']?>>
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
                <button type="button" class="btn btn-dark" id="modal-vote">&#x25B2;UpVote</button>
                <button type="button" class="btn btn-dark" id="btn-com1" class="btn-com"><img src="images/commentaire.png" id="commentaire"></button>
                <button type="button" class="btn btn-secondary" id="quit-btn" data-dismiss="modal">Quitter</button>
            </div>
        </div>
    </div>
</div>
                    
<?php
    $i++;
}
$produit->closeCursor();
?>