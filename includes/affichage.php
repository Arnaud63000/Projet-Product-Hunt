<?php
$produit = $bdd->query('SELECT * FROM produits LEFT JOIN votes ON votes.nom_produit = produits.nom_produit ORDER BY vote DESC LIMIT 0,3');

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
            <a href=<?=$donnees['lien_categories']?> type="button" class="btn btn-dark" id="btn-ctg">&#x25A4;<?=$donnees['categories']?></a>
            <form id="form-vote" action="includes/vote.php" method="post">
                <input type="hidden" name="vote-btn" value="<?=$donnees['nom_produit']?>">
                <button type="button" class="btn btn-dark btn-vote" name="vote-btn">&#x25B2; <span><?=$donnees['vote'] ?></span></button>
            </form>

            <a href="commentaire.php?id=<?=$donnees['id']; ?>"<img src="./images/commentaire.png"><img src="./images/commentaire.png" id="commentaire"></a>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" id="modal-vote">&#x25B2;UpVote</button>
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
