<?php
function mauvaisOuBon($booleen) {
    if($booleen!=null && $booleen.length==7) {
        for($i = 0; $i<7; $i=$i+2) {
            if($booleen[$i]==1) {
                echo "bon ";
            }
            elseif($booleen[$i]==0){
                echo "mauvais ";
            }
        }
    }
    
}

?>


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

                    <div id = "explicationAdmin"  style="padding-bottom:30px">Si vous voulez modifier un ou plusieurs champs, remplissez uniquement les champs souhaités et
                     validez la modification.
                    </div>

                    <div style="display:flex; flex-direction:row; justify-content:space-between;padding-bottom: 30px;">
                        <button class="buttonAdmin" id="questionsGenerales" onclick="afficherListeQuestions('listeQuestionsGenerales')">Questions Generales</button>

                        <button class="buttonAdmin" id="questionsWeb" onclick="afficherListeQuestions('listeQuestionsWeb')">Questions Web</button>
                        
                        <button class="buttonAdmin" id="questionsBD" onclick="afficherListeQuestions('listeQuestionsBD')">Questions BD</button>
                    </div>

                    <div style="display:flex; flex-direction:row; justify-content:space-between;">

                        <button class="buttonAdmin" id="questionsReseaux" onclick="afficherListeQuestions('listeQuestionsReseaux')">Questions Reseaux</button>

                        <button class="buttonAdmin" id="questionsProgrammation" onclick="afficherListeQuestions('listeQuestionsProgrammation')">Questions Programmation</button>
                        
                        <button class="buttonAdmin" onclick="afficherInserer()">Insérer</bouton>             

                    </div>

                </div>
                <form id ="formInserer" style="display:none" action="" method="POST">  
                  
                    <input class="formInput" name="libelle" type="text"  placeholder="Libelle" placeholder="libelle">
                    
                    <select class="formInput formInputSelect" name="theme">
                        <option>theme</option>
                        <option value="General">Général</option>
                        <option value="BD">BD</option>
                        <option value="Programmation">Programmation</option>
                        <option value="Reseaux">Réseaux</option>
                        <option value="Web">Web</option>
                        <option value="Systeme">Système</option>
                    
                    </select>

                    <select class="formInput formInputSelect" name="difficulte">
                        <option>difficulté(1 ou 2)</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                    </select>

                    <input class="formInput" id="indice" name="indice" type="text" placeholder="indice">

                    <input class="formInput" id="explication" name="explication" type="text" placeholder="explication">

                    <input class="formInput" id="reponse1" name="reponse1" type="text" placeholder="réponse 1">
                    <select class="formInput formInputSelect" name="bonneRep1">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>

                    <input class="formInput" id="reponse2" name="reponse2" type="text" placeholder="réponse 2">
                    <select class="formInput formInputSelect" name="bonneRep2">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>

                    <input class="formInput" id="reponse3" name="reponse3" type="text" placeholder="réponse 3">
                    <select class="formInput formInputSelect" name="bonneRep3">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>

                    <input class="formInput" id="reponse4" name="reponse4" type="text" placeholder="réponse 4">
                    <select class="formInput formInputSelect" name="bonneRep4">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>

                    <input class="formInput formInputSelect" type="submit" name="insertion" value="Insérer"/>

                </form>
             
                <div id="listeQuestionsGenerales" style="display:none">
                <?php donneListe("General","286642","ButInformatiqueBD");?>
                </div>
                    
                <div id="listeQuestionsWeb" style="display:none">
                <?php donneListe("Web","286642","ButInformatiqueBD");?>
                </div>

                <div id="listeQuestionsBD" style="display:none">
                <?php donneListe("BD","286642","ButInformatiqueBD");?>
                </div>
                
                <div id="listeQuestionsReseaux" style="display:none">
                <?php donneListe("Reseaux","286642","ButInformatiqueBD");?>
                </div> 

                <div id="listeQuestionsProgrammation" style="display:none">
                <?php donneListe("Programmation","286642","ButInformatiqueBD");?>
                </div>

            </div>
        </div>
    </body>
</html>
<?php } ?>





<?php

function boutonTheme($theme,$numeroQuestion){
    if($theme == "Web") {?>
        <button class="buttonAdmin" style="margin:20px;" onclick="afficheQuestionsTest('Web',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
    else if($theme == "General") {?>
        <button class="buttonAdmin" style="margin:20px;" onclick="afficheQuestionsTest('General',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }

    else if($theme == "BD") {?>
        <button class="buttonAdmin" style="margin:20px;" onclick="afficheQuestionsTest('BD',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
    else if($theme == "Reseaux") {?>
        <button class="buttonAdmin" style="margin:20px;" onclick="afficheQuestionsTest('Reseaux',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
    else if($theme == "Programmation") {?>
        <button class="buttonAdmin" style="margin:20px;" onclick="afficheQuestionsTest('Programmation',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
}


function donneListe($THEME,$user,$pass){

    $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
 //on appelle le pdo

    // On ecris la requete avec les paramettres de la fonction
    $stmt=$connexionBD->prepare("SELECT Q.ID_QUESTION, Q.LIBELLE , Q.DIFFICULTE, Q.INDICE, Q.EXPLICATION,
     GROUP_CONCAT(R.LIBELLE) AS REPONSES,
     GROUP_CONCAT(R.BONNE_REP) AS VALIDITES 
     FROM QUESTION Q LEFT JOIN REPONSE R ON Q.ID_QUESTION = R.ID_QUESTION
    WHERE THEME=? GROUP BY Q.ID_QUESTION");

    $stmt->execute([$THEME]); 
    $result = $stmt->fetchAll();
    for($i = 0; $i<sizeof($result); $i = $i + 1) {
        $numQuestion = "question" .$THEME .($i+1);

        boutonTheme($THEME,($i+1));
        ?>
            <div class = "question" id=<?php echo $numQuestion;?> style="display:none">
                <form class ="formModifier" action="" method="POST">
                    <input class="formInput" name="id" style="display:none" type="text" value =<?php echo $result[$i]['ID_QUESTION'];?>>
                    <input class="formInput" name="libelle" type="text"  placeholder="Libelle" placeholder="libelle">
                    <select class="formInput formInputSelect" name="difficulte" placeholder="1 bon, 0 mauvais">
                        <option>difficulté(1 ou 2)</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                    </select>
                    <input class="formInput" id="indice" name="indice" type="text" placeholder="indice">
                    <input class="formInput" id="explication" name="explication" type="text" placeholder="explication">
                    <input class="formInput" id="reponse1" name="reponse1" type="text" placeholder="réponse 1">
                    <select class="formInput formInputSelect" name="bonneRep1" placeholder="1 bon, 0 mauvais">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>
                    <input class="formInput" id="reponse2" name="reponse2" type="text" placeholder="réponse 2">
                    <select class="formInput formInputSelect" name="bonneRep2" placeholder="1 bon, 0 mauvais">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>
                    <input class="formInput" id="reponse3" name="reponse3" type="text" placeholder="réponse 3">
                    <select class="formInput formInputSelect" name="bonneRep3" placeholder="1 bon, 0 mauvais">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>
                    <input class="formInput" id="reponse4" name="reponse4" type="text" placeholder="réponse 4">
                    <select class="formInput formInputSelect" name="bonneRep4" placeholder="1 bon, 0 mauvais">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>
                    <input class="formInput formInputSelect" type="submit" name="modification" value="Modifier"/>
                    <input class="formInput formInputSelect" type="submit" name="suppression" value="Supprimer"/>

                </form>


                <div class = "libelleQuestion">
                    <h3 class="formTitles">Question : </h3>
                    <?php echo $result[$i]['LIBELLE'];?>
                </div>

                <div class = "difficulteQuestion">
                        <h3 class="formTitles">Difficulté : </h3>
                        <?php echo $result[$i]['DIFFICULTE'];?>                   
                </div>

                <div class = "indiceQuestion">
                    <h3 class="formTitles">Indice : </h3>
                    <?php echo $result[$i]['INDICE'];?>
                </div>

                <div class = "explicationQuestion">
                    <h3 class="formTitles">Explication : </h3>
                        <?php echo $result[$i]['EXPLICATION'];?> 
                </div>

                <div class = "reponses">
                    <h3 class="formTitles">Reponses : </h3>
                        <?php echo $result[$i]['REPONSES'];?> 
                </div>

                <div class = "validites">
                    <h3 class="formTitles">Reponses Valides ou non : </h3>
                        <?php echo mauvaisOuBon($result[$i]['VALIDITES']);?> 
                </div>
            </div>
            <?php
    } 
}

?>

<?php 
/* fonction récupérant le mot de passe de l'administrateur dans la base de données: version pdo */
function trouveMotDePasseDeux($user, $pass) {
    $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
    $stmt=$connexionBD->prepare("SELECT MDP FROM MOTDEPASSE WHERE ID_MDP=1");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["MDP"];
}


/** Ajout */
/* fonction permettant à l'administrateur d'ajouter une question */
function AjouteQuestion($Libelle, $Theme, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryId = mysqli_query($dbLink, "SELECT max(ID_QUESTION) From QUESTION; ");
    $IdQuestion = mysqli_fetch_assoc($queryId);
    $IdQuestion = $IdQuestion["max(ID_QUESTION)"] + 1;

    $queryQuestion = mysqli_prepare($dbLink, 'INSERT Into QUESTION Values (?, ?, ?, ?, ?, ?);');
    mysqli_stmt_bind_param($queryQuestion, "ssssss", $IdQuestion, $Libelle, $Theme, $Difficulte, $Indice, $Explication);
    mysqli_execute($queryQuestion);
    mysqli_stmt_close($queryQuestion);

    //On recupere l'id de la question qu'on vient de créer
    $queryIdQuestion = mysqli_prepare($dbLink, 'SELECT ID_QUESTION From QUESTION Where LIBELLE = ?;');
    mysqli_stmt_bind_param($queryIdQuestion, "s", $Libelle);
    mysqli_execute($queryIdQuestion);
    mysqli_stmt_bind_result($queryIdQuestion, $IdQuestion);
    mysqli_stmt_fetch($queryIdQuestion);
    mysqli_stmt_close($queryIdQuestion);

    AjouteReponse($IdQuestion, $Rep1, $Bon1);
    AjouteReponse($IdQuestion, $Rep2, $Bon2);
    AjouteReponse($IdQuestion, $Rep3, $Bon3);
    AjouteReponse($IdQuestion, $Rep4, $Bon4);
}

/* fonction insérant une des réponses associée à une question */
function AjouteReponse($IdQuestion, $Rep, $BonRep)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryReponse = mysqli_prepare($dbLink, 'INSERT Into REPONSE(ID_QUESTION, BONNE_REP, LIBELLE) Values (?, ?, ?);');
    mysqli_stmt_bind_param($queryReponse, "sss", $IdQuestion, $BonRep, $Rep);
    mysqli_execute($queryReponse);
    mysqli_stmt_close($queryReponse);
}

/** modification */

/* fonction permettant à l'administrateur de modifier une question */
function ModifieQuestion($Id, $Libelle, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryReponse = mysqli_prepare($dbLink, 'UPDATE `QUESTION` SET `LIBELLE`=?,`DIFFICULTE`=?,`INDICE`=?,`EXPLICATION`=? WHERE ID_QUESTION=?;');
    mysqli_stmt_bind_param($queryReponse, "sssss", $Libelle, $Difficulte, $Indice, $Explication, $Id);
    mysqli_execute($queryReponse);
    mysqli_stmt_close($queryReponse);

    ModifieReponse($Id, $Rep1, $Bon1, 0);
    ModifieReponse($Id, $Rep2, $Bon2, 1);
    ModifieReponse($Id, $Rep3, $Bon3, 2);
    ModifieReponse($Id, $Rep4, $Bon4, 3);
}

/* fonction permettant à l'administrateur de modifier les réponses d'une question */
function ModifieReponse($IdQuestion, $Rep, $BonRep, $ligne)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryReponse = mysqli_prepare($dbLink, 'UPDATE `REPONSE` SET `BONNE_REP`= ?,`LIBELLE`= ? WHERE ID_REP = (Select ID_REP FROM REPONSE WHERE ID_QUESTION = ? LIMIT 1 OFFSET ?);');
    mysqli_stmt_bind_param($queryReponse, "ssss", $BonRep, $Rep, $IdQuestion, $ligne);
    mysqli_execute($queryReponse);
    mysqli_stmt_close($queryReponse);
}

/* fonction vérifiant les paramètres rentrés par l'utilisateur avant de modifier la question */
function VerifArguments($Id, $Libelle, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $test = $Id != null or die('Id de la question a modifier obligatoire');

    if ($Libelle == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From QUESTION Where ID_QUESTION = ?;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Libelle);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }

    if ($Difficulte == null) {
        $query = mysqli_prepare($dbLink, 'SELECT DIFFICULTE From QUESTION Where ID_QUESTION = ?;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Difficulte);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Indice == null) {
        $query = mysqli_prepare($dbLink, 'SELECT INDICE From QUESTION Where ID_QUESTION = ?;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Indice);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Explication == null) {
        $query = mysqli_prepare($dbLink, 'SELECT EXPLICATION From QUESTION Where ID_QUESTION = ?;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Explication);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }


    if ($Rep1 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Rep1);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Bon1 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Bon1);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }

    if ($Rep2 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 1;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Rep2);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Bon2 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 1;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Bon2);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }

    if ($Rep3 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 2;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Rep3);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Bon3 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 2;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Bon3);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }

    if ($Rep4 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 3;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Rep4);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Bon4 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 3;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Bon4);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }

    ModifieQuestion($Id, $Libelle, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4);

}

/** suppression fonctions*/
/* il faut avoir posté le formulaire de suppression, même avec des variables vides pour éviter d'arriver sur cette page sans être administrateur*/
function supprimeQuestion($ID_QUESTION) {
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryRep = mysqli_prepare($dbLink, 'DELETE FROM REPONSE Where ID_QUESTION = ?;');
    mysqli_stmt_bind_param($queryRep, 'i', $ID_QUESTION);
    mysqli_execute($queryRep);
    mysqli_stmt_close($queryRep);
    
    $queryQ = mysqli_prepare($dbLink, 'DELETE FROM QUESTION Where ID_QUESTION = ?;');
    mysqli_stmt_bind_param($queryQ, 'i', $ID_QUESTION);
    mysqli_execute($queryQ);
    mysqli_stmt_close($queryQ);
}
/** Suppression| modification| insertion | Connexion sur la page*/

if(isset($_POST["suppression"])){
    $Id = $_POST["id"];
    supprimeQuestion($Id);
    resultatAdmin();
}

/* il faut avoir posté le formulaire de modification, même avec des variables vides pour éviter d'arriver sur cette page sans être administrateur*/
if(isset($_POST["modification"])) {
    $id = $_POST["id"];
    $libelle = $_POST["libelle"];
    $difficulte = $_POST["difficulte"];
    $indice = $_POST["indice"];
    $explication = $_POST["explication"];
    $reponse1 = $_POST["reponse1"];
    $bonneRep1 = $_POST["bonneRep1"];
    $reponse2 = $_POST["reponse2"];
    $bonneRep2 = $_POST["bonneRep2"];
    $reponse3 = $_POST["reponse3"];
    $bonneRep3 = $_POST["bonneRep3"];
    $reponse4 = $_POST["reponse4"];
    $bonneRep4 = $_POST["bonneRep4"];
    VerifArguments($id, $libelle, $difficulte, $indice, $explication, $reponse1, $bonneRep1, $reponse2, $bonneRep2, $reponse3, $bonneRep3, $reponse4, $bonneRep4);
    resultatAdmin();
}


/** il faut avoir posté le formulaire d'insertion, même avec des variables vides pour éviter d'arriver sur cette page sans être administrateur*/
if(isset($_POST["insertion"])) {
    $libelle = $_POST["libelle"];
    $theme = $_POST["theme"];
    $difficulte = $_POST["difficulte"];
    $indice = $_POST["indice"];
    $explication = $_POST["explication"];
    $reponse1 = $_POST["reponse1"];
    $bonneRep1 = $_POST["bonneRep1"];
    $reponse2 = $_POST["reponse2"];
    $bonneRep2 = $_POST["bonneRep2"];
    $reponse3 = $_POST["reponse3"];
    $bonneRep3 = $_POST["bonneRep3"];
    $reponse4 = $_POST["reponse4"];
    $bonneRep4 = $_POST["bonneRep4"];
    AjouteQuestion($libelle, $theme, $difficulte, $indice, $explication, $reponse1, $bonneRep1, $reponse2, $bonneRep2, $reponse3, $bonneRep3, $reponse4, $bonneRep4);
    resultatAdmin();
}
 
/* fonction permettant de lancer la page de gestion d'administrateur si l'identifiant et le mot de passe entrés sont corrects */

if(isset($_POST['action']) && isset($_POST['id']) && isset($_POST['motDePasse'])) {
    startContact();
}

function startContact() { 
    $action = $_POST['action'];
    $Identifiant = $_POST['id'];
    $motdepasse = $_POST['motDePasse'];
    if($action == 'valider' || $action == 'Retourner vers Interface Admin') { 
        if($Identifiant == 'Patricia' & password_verify($motdepasse,trouveMotDePasseDeux("286642","ButInformatiqueBD"))) {

            resultatAdmin();
        }
        else {
        header("Location: https://quizzbutinfoaix.alwaysdata.net/pages/admin.php");
        exit;
        }
    }
}
?>