<?php 
/*fonction démarrant la page de gestion de l'administrateur*/
function resultatAdmin() { ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--<script src="https://kit.fontawesome.com/8e09982db4.js" crossorigin="anonymous"></script>-->
        <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" /> 
        <title>Objectif BUT - Administration</title>  
        <script src="../javascript.js"></script>
        <link rel="stylesheet" href="../css/styleResultAdmin.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <meta name="description" content="Page d'administration du jeu Objectif BUT après s'être connecté en tant qu'administrateur">
    </head>
    <body>
        <header>
            <div class="entete_info">
                <div class="rubrique_menu"><a href="../index.php"><img alt="return" id="return" src="../images/maison.png"></a></div>
                <div class="rubrique_menu"><h1 class="contact_titre">Administrateur</h1></div>
            </div>
        </header>
        <div class="menu">
            <div class="presentation_form">
                <div class="titre_mail">
                    Que voulez-vous faire? :
                </div>

                <div id = "choix">

                    <button id="questionsGenerales" onclick="afficherListeQuestions('listeQuestionsGenerales')">Questions Generales</button>
                    <div id="listeQuestionsGenerales" style="display:none">
                        <?php
                            donneListe("General","286642","ButInformatiqueBD");?>
                    </div>

                    <button id="questionsWeb" onclick="afficherListeQuestions('listeQuestionsWeb')">Questions Web</button>
                    <div id="listeQuestionsWeb" style="display:none">
                        <?php //afficheQuestionsTheme();
                            donneListe("Web","286642","ButInformatiqueBD");?>
                    </div>
                        <!--form id ="formInserer" action="inserer.php" method="POST">
                        <input id="libelle" name="libelle" type="text" placeholder="libelle">
                        <input id="theme" name="theme" type="text" placeholder="theme">
                        <input id="difficulte" name="difficulte" type="text" placeholder="difficulte(1 ou 2)">
                        <input id="indice" name="indice" type="text" placeholder="indice">
                        <input id="explication" name="explication" type="text" placeholder="explication">
                        <input id="reponse1" name="reponse1" type="text" placeholder="reponse 1">
                        <input id="bonneRep1" name="bonneRep1" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse2" name="reponse2" type="text" placeholder="reponse 2">
                        <input id="bonneRep2" name="bonneRep2" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse3" name="reponse3" type="text" placeholder="reponse 3">
                        <input id="bonneRep3" name="bonneRep3" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse4" name="reponse4" type="text" placeholder="reponse 4">
                        <input id="bonneRep4" name="bonneRep4" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <div class="valide_form">
                            <input type="submit" name="action" value="valider"/>
                        </div>
                         </form -->

                    <!--button id="supprimer" onclick="afficherSupprimer()">Supprimer?</button>

                    <button id="modifier" onclick="afficherModifier()">Modifier?</button>

                    <button id="inserer" onclick="afficherInserer()">Insérer?</button-->
                </div>

                <!--form id ="formSupprimer" action="supprimer.php" method="POST">
                        <input id="idQuestion" name="idQuestion" type="text" placeholder="IdQuestion">
                <div class="valide_form">
                        <input type="submit" name="action" value="valider"/>
                </div>
                </form>

                <form id ="formInserer" action="inserer.php" method="POST">
                        <input id="libelle" name="libelle" type="text" placeholder="libelle">
                        <input id="theme" name="theme" type="text" placeholder="theme">
                        <input id="difficulte" name="difficulte" type="text" placeholder="difficulte(1 ou 2)">
                        <input id="indice" name="indice" type="text" placeholder="indice">
                        <input id="explication" name="explication" type="text" placeholder="explication">
                        <input id="reponse1" name="reponse1" type="text" placeholder="reponse 1">
                        <input id="bonneRep1" name="bonneRep1" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse2" name="reponse2" type="text" placeholder="reponse 2">
                        <input id="bonneRep2" name="bonneRep2" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse3" name="reponse3" type="text" placeholder="reponse 3">
                        <input id="bonneRep3" name="bonneRep3" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse4" name="reponse4" type="text" placeholder="reponse 4">
                        <input id="bonneRep4" name="bonneRep4" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                <div class="valide_form">
                        <input type="submit" name="action" value="valider"/>
                </div>
                </form>

                <form id ="formModifier" action="modifier.php" method="POST">
                        <input name="id" type="text" placeholder="id">
                        <input name="libelle" type="text" placeholder="libelle">
                        <input name="theme" type="text" placeholder="theme">
                        <input name="difficulte" type="text" placeholder="difficulte(1 ou 2)">
                        <input name="indice" type="text" placeholder="indice">
                        <input name="explication" type="text" placeholder="explication">
                        <input name="reponse1" type="text" placeholder="reponse 1">
                        <input name="bonneRep1" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input name="reponse2" type="text" placeholder="reponse 2">
                        <input name="bonneRep2" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input name="reponse3" type="text" placeholder="reponse 3">
                        <input name="bonneRep3" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input name="reponse4" type="text" placeholder="reponse 4">
                        <input name="bonneRep4" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                <div class="valide_form">
                        <input type="submit" name="action" value="valider"/>
                </div>
                </form-->

              
            </div>
            <div  id="toutesLesQuestions"><?php //afficheQuestions();  ?> </div>
        </div>
    </body>
</html>
<?php } ?>


<?php 
/* fonction permettant de lancer la page de gestion d'administrateur si l'identifiant et le mot de passe entrés sont corrects */
function startContact() { 
    $action = $_POST['action'];
    $Identifiant = $_POST['id'];
    $Motdepasse = $_POST['motDePasse'];
    if($action == 'valider' || $action == 'Retourner vers Interface Admin') 

 { 
    if($Identifiant == 'Patricia' & $Motdepasse == trouveMotDePasse()) {

        resultatAdmin();
    }
    else {
        header("Location: https://quizzbutinfoaix.alwaysdata.net/pages/admin.php");
        exit;
    }
 }
}
?>

<?php
/* fonction affichant toutes les questions */
function afficheQuestions() {
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT * FROM QUESTION';
    $result = mysqli_query($dbLink, $query);
    if (!$result)
    {
    echo 'Impossible d\'exécuter la requête ', $query, ' : ', mysqli_error($dbLink);
    }
    else
    {
        if (mysqli_num_rows($result) != 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {  
                ?>
                <div class = "question"> 
                    <?php echo $row['LIBELLE'];echo ' : '; ?>
                    <div class = "id_question"> <?php echo $row['ID_QUESTION'];?> </div>
                </div>
                <?php
            }
        } 
    } 
}
?>





<?php

function boutonTheme($theme,$numeroQuestion){
    if($theme == "Web") {?>
        <button style="margin:20px;" onclick="afficheQuestionsTest('Web',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
    else if($theme == "General") {?>
        <button style="margin:20px;" onclick="afficheQuestionsTest('General',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
}


function donneListe($THEME,$user,$pass){

    $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
 //on appelle le pdo

    // On ecris la requette avec les paramettres de la fonction
    $stmt=$connexionBD->prepare("SELECT * FROM QUESTION WHERE THEME=?");

    $stmt->execute([$THEME]); 
    $result = $stmt->fetchAll();
    for($i = 0; $i<sizeof($result); $i = $i + 1) {
        $numQuestion = "question" .$THEME .($i+1);

        boutonTheme($THEME,($i+1));
        ?>
            <div class = "question" id=<?php echo $numQuestion;?> style="display:none">
                <form class ="formModifier" action="modifier.php" method="POST">
                    <input name="id" style="display:none" type="text" value =<?php echo $result[$i]['ID_QUESTION'];?>>
                    <input name="libelle" type="text"  placeholder="Libelle" placeholder="libelle">
                    <input id="difficulte" name="difficulte" type="text" placeholder="difficulte(1 ou 2)">
                    <input id="indice" name="indice" type="text" placeholder="indice">
                    <input id="explication" name="explication" type="text" placeholder="explication">
                    <input id="reponse1" name="reponse1" type="text" placeholder="reponse 1">
                    <input id="bonneRep1" name="bonneRep1" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                    <input id="reponse2" name="reponse2" type="text" placeholder="reponse 2">
                    <input id="bonneRep2" name="bonneRep2" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                    <input id="reponse3" name="reponse3" type="text" placeholder="reponse 3">
                    <input id="bonneRep3" name="bonneRep3" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                    <input id="reponse4" name="reponse4" type="text" placeholder="reponse 4">
                    <input id="bonneRep4" name="bonneRep4" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                    <input type="submit" name="action" value="valider"/>
                </form>

                <div class = "libelleQuestion">
                    <h3>Question : </h3>
                    <?php echo $result[$i]['LIBELLE'];?>
                </div>

                <div class = "indiceQuestion">
                    <h3>Indice : </h3>
                    <?php echo $result[$i]['INDICE'];?>
                </div>

                <div class = "explicationQuestion">
                    <h3>Explication : </h3>
                        <?php echo $result[$i]['EXPLICATION'];?> 
                </div>
            </div>
            <?php
    } 
}



/**fonction obsolete */
function afficheQuestionsTheme() {

    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT * FROM QUESTION WHERE THEME="General"';
    $result = mysqli_query($dbLink, $query);
    if (!$result)
    {
    echo 'Impossible d\'exécuter la requête ', $query, ' : ', mysqli_error($dbLink);
    }
    else
    {
        if (mysqli_num_rows($result) != 0)
        {   $nb = 1;
            while ($row = mysqli_fetch_assoc($result))
            {   $numQuestion = "questionGeneral" . $nb;
                ?>
                 
                <button style="margin:20px;" onclick="afficheQuestionsTest('General',<?php echo $nb;?>)"> question <?php echo $nb; ?></button>
                <div class = "question" id=<?php echo $numQuestion;?> style="display:none">
                    <form class ="formModifier" action="modifier.php" method="POST">
                        <input name="id" style="display:none" type="text" value =<?php echo $row['ID_QUESTION'];?>>
                        <input name="libelle" type="text"  placeholder="Libelle" placeholder="libelle">
                        <input id="difficulte" name="difficulte" type="text" placeholder="difficulte(1 ou 2)">
                        <input id="indice" name="indice" type="text" placeholder="indice">
                        <input id="explication" name="explication" type="text" placeholder="explication">
                        <input id="reponse1" name="reponse1" type="text" placeholder="reponse 1">
                        <input id="bonneRep1" name="bonneRep1" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse2" name="reponse2" type="text" placeholder="reponse 2">
                        <input id="bonneRep2" name="bonneRep2" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse3" name="reponse3" type="text" placeholder="reponse 3">
                        <input id="bonneRep3" name="bonneRep3" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse4" name="reponse4" type="text" placeholder="reponse 4">
                        <input id="bonneRep4" name="bonneRep4" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input type="submit" name="action" value="valider"/>
                    </form>

                    <div class = "libelleQuestion">
                        <h3>Question : </h3>
                        <?php echo $row['LIBELLE'];?>
                    </div>

                    <div class = "indiceQuestion">
                        <h3>Indice : </h3>
                        <?php echo $row['INDICE'];?>
                    </div>

                    <div class = "explicationQuestion">
                        <h3>Explication : </h3>
                            <?php echo $row['EXPLICATION'];?> 
                    </div>
                </div>

                <?php ++$nb;
            }
        } 
    } 
}
?>

<?php 
/* fonction récupérant le mot de passe de l'administrateur dans la base de données */
function trouveMotDePasse() {
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

 
    // créer une requête préparée
    if ($stmt = mysqli_prepare($dbLink, "SELECT MDP FROM MOTDEPASSE WHERE ID_MDP=1")) {
        // exécuter la requête
        mysqli_stmt_execute($stmt);
        // associer la colonne du jeu de résultats à une variable
        mysqli_stmt_bind_result($stmt, $MDP);
        // récupérer la valeur
        mysqli_stmt_fetch($stmt);
        return $MDP;
        mysqli_stmt_close($stmt);
    }
}
?>

<?php 
if(isset($_POST['action']) && isset($_POST['id']) && isset($_POST['motDePasse'])) {
    startContact();
}
?>