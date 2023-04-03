<?php
/*fonction permettant d'ajouter un gagnant dans la base de données*/
function AjouteGagnant($user, $pass, $pseudo, $score, $spe)
{
    try {
        $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
        $connexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $queryReponse = $connexionBD->prepare('INSERT Into GAGNANT(NOM_GAGNANT, SCORE, SPECIALITE) Values (?, ?, ?);');
        $queryReponse->execute([$pseudo, $score, $spe]);
        $queryReponse->closeCursor();

    } catch (PDOException $erreur) {
        echo "Erreur : " . $erreur->getMessage();
    }
}

/*fonction permettant de renvoyer la liste des gagnants dans la base de données*/
function recupGagnant($user,$pass) {
    try {
        $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
        $connexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $query = 'SELECT * FROM GAGNANT ORDER BY SCORE DESC';
        $stmt = $connexionBD->query($query);
        $listeGagnants = array();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $listeGagnants[] = $row['NOM_GAGNANT'];
            $listeGagnants[] = $row['SPECIALITE'];
            $listeGagnants[] = $row['SCORE'];
        }
        
        return $listeGagnants;
    } catch (PDOException $erreur) {
        echo "Erreur : " . $erreur->getMessage();
    }
}
?>


<?php 
/*fonction démarrant la page classement*/
function start_classement($gagnants,$nb) { 
    ?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Objectif BUT - Classement</title>  
            <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" /> 
            <script src="../javascript.js"></script>
            <link rel="stylesheet" href="../css/styleClassement.css">
            <link rel="stylesheet" href="../css/styleGeneral.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
            <meta name="description" content="Page de classement des résultats du jeu Objectif BUT">
        </head>
        <body>
        <header>
            <div class="entete_info">
                <div class="rubrique_menu"><a href="../index.php"><img id="return" alt="retour" src="../images/maison.png"></a></div>
                <div class="rubrique_menu"><h1 class="classement_titre">Classement</h1></div>
            </div>
        </header>
        <div id="boutonMode">
                <a class="lienButton" style="color: white; " href="#" onClick="switchTheme_avanced_onClick(event)"> Mode sombre </a>
                <a class="lienButton" id="changeFont" style="color: white; width: 150px;" href="#" onClick="switchThemeFont_avanced_onClick(event)"> Mode taille police agrandie </a>
        </div>
        <div class="menu">
            <table id="classement_tab" class="vignets">
                <tr id="premiere_ligne">
                    <th>#</th>
                    <th>Pseudo</th>
                    <th>Spécialité</th>
                    <th>Score</th>
                </tr>
                
                <?php $x = 0 ?>
                <?php while($nb > $x/3) { ?>
                <tr>
                    <td><?php echo ($x/3 + 1);?></td>
                    <td><?php echo $gagnants[$x]; $x = $x + 1; ?></td>
                    <td><?php echo $gagnants[$x]; $x = $x + 1; ?></td>
                    <td><?php echo $gagnants[$x]; $x = $x + 1;?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        </body>
    </html>
<?php } ?>

<?php 
if (isset($_POST['pseudo'])) {
    $pseudo=$_POST['pseudo'];
    $score=$_POST['score'];
    $spe = $_POST["spe"];
    AjouteGagnant("286642", "ButInformatiqueBD", $pseudo, $score, $spe);
}
/*s'il n'y a aucun gagnant, on évite l'erreur en gardant toujours au moins un gagnant*/
$gagnants = recupGagnant("286642_uti1ls", "SelectBDUser.");
if($gagnants == 0){
    AjouteGagnant("286642", "ButInformatiqueBD", "test", 0, "programmation");
}
$nb= sizeof($gagnants)/3;
start_classement($gagnants, $nb);
?>