<?php
require_once "../DataAccess.php";

if (isset($_POST['pseudo'])) {
    $pseudo=$_POST['pseudo'];
    $score=$_POST['score'];
    $spe = $_POST["spe"];
    AjouteGagnant($pseudo,$score,$spe);
}

/*si il n'y a aucun gagnant, on évite l'erreur en gardant toujours au moins un gagnant*/
if(recupGagnant() == 0){
    AjouteGagnant("test",0,"programmation");
}

$e = recupGagnant();
$nb= sizeof($e)/3;

require "../view/vueClassement.php";