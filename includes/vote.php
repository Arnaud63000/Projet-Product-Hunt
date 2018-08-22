<?php
    include 'connect.php';
?>

<?php $number = $_GET['modal-vote'];

if (isset($_GET["modal-vote"])) {
     $number += 1;
    echo $number;
    exit();

    $req = $bdd->prepare('INSERT INTO hunter_prod(up) VALUES(1)');
    $req->execute(array($_POST['modal-vote']));
}




/*
$vote = $_POST['modal-vote'];


    $req = $bdd->prepare('INSERT INTO hunter_prod (up) VALUES(?)');
    $req->execute(array($_POST['modal_vote']));*/
?>


