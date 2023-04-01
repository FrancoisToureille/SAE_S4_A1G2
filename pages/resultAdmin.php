<?php
function mauvaisOuBon($booleen) {
    if($booleen!=null && strlen($booleen)==7) {
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


/* fonction permettant à l'administrateur d'ajouter une question en PDO */
function AjouteQuestionPdo($user, $pass, $Libelle, $Theme, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{

    try {
        $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
        
        $queryId = $connexionBD->query("SELECT max(ID_QUESTION) MAX_ID From QUESTION");
        $IdQuestion = $queryId->fetch(PDO::FETCH_ASSOC);
        /* On ajoute 1 à l'id de la question pour avoir un id unique */
        $IdQuestion = $IdQuestion["MAX_ID"] + 1;

        $queryQuestion = $connexionBD->prepare('INSERT Into QUESTION Values (?, ?, ?, ?, ?, ?)');
        $queryQuestion->execute([$IdQuestion, $Libelle, $Theme, $Difficulte, $Indice, $Explication]);
        
        //On recupere l'id de la question qu'on vient de créer
        $queryIdQuestion = $connexionBD->prepare('SELECT ID_QUESTION From QUESTION Where LIBELLE = ?;');
        $queryIdQuestion->execute([$Libelle]);
        $IdQuestion = $queryIdQuestion->fetch(PDO::FETCH_ASSOC);
        $IdQuestion = $IdQuestion["ID_QUESTION"];

        /* On ajoute les réponses à la question insérée, 4 réponses possibles */
        AjouteReponsePdo($IdQuestion, $Rep1, $Bon1, 1, $connexionBD);
        AjouteReponsePdo($IdQuestion, $Rep2, $Bon2, 2, $connexionBD);
        AjouteReponsePdo($IdQuestion, $Rep3, $Bon3, 3, $connexionBD);
        AjouteReponsePdo($IdQuestion, $Rep4, $Bon4, 4, $connexionBD);

        $connexionBD = null;
    } catch (PDOException $erreur) {
        die('Erreur relevée : ' . $erreur->getMessage());
    }
}

/* fonction insérant une des réponses associée à une question : version pdo*/
function AjouteReponsePdo($IdQuestion, $Rep, $BonRep, $Ordre, $connexionBD)
{
    try {
        $stmt = $connexionBD->prepare("INSERT Into REPONSE(ID_QUESTION, BONNE_REP, LIBELLE, ORDRE) Values (?, ?, ?, ?)");
        $stmt->execute([$IdQuestion, $BonRep, $Rep, $Ordre ]);
    } catch(PDOException $erreur) {
        die('Erreur dans l\'insertion de la réponse : ' . $erreur->getMessage());
    }
}

/** modification */

/* fonction permettant à l'administrateur de modifier une question */
function ModifieQuestionPdo($user, $pass, $Id, $Libelle, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{    
    try {
        $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
        $connexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $queryQuestion = $connexionBD->prepare('UPDATE `QUESTION` SET `LIBELLE`=:Libelle, `DIFFICULTE`=:Difficulte, `INDICE`=:Indice, `EXPLICATION`=:Explication WHERE ID_QUESTION=:Id;');
        $queryQuestion->execute(array(':Id' => $Id, ':Libelle' => $Libelle, ':Difficulte' => $Difficulte, ':Indice' => $Indice, ':Explication' => $Explication));
        $queryQuestion->closeCursor();
        

        ModifieReponsePdo("286642","ButInformatiqueBD",$Id, $Rep1, $Bon1, 1);
        ModifieReponsePdo("286642","ButInformatiqueBD",$Id, $Rep2, $Bon2, 2);
        ModifieReponsePdo("286642","ButInformatiqueBD",$Id, $Rep3, $Bon3, 3);
        ModifieReponsePdo("286642","ButInformatiqueBD",$Id, $Rep4, $Bon4, 4);

        $connexionBD = null;
    } catch (PDOException $erreur) {
        echo "Erreur relevée : " . $erreur->getMessage();
    }
}

/* fonction permettant à l'administrateur de modifier les réponses d'une question */
function ModifieReponsePdo($user,$pass, $IdQuestion, $Rep, $BonRep, $ligne)
{
    try {
        $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
        $queryReponse = $connexionBD->prepare('UPDATE `REPONSE` SET `BONNE_REP`= ?,`LIBELLE`= ? WHERE ID_QUESTION = ? AND ORDRE = ?;');
        $queryReponse->execute([$BonRep, $Rep, $IdQuestion, $ligne]);
        $queryReponse->closeCursor();
        $connexionBD = null;
    } catch (PDOException $erreur) {
        echo "Erreur relevée : " . $erreur->getMessage();
    }
}


/* fonction vérifiant les paramètres rentrés par l'utilisateur avant de modifier la question */
function VerifArgumentsPdo($user,$pass,$Id, $Libelle, $Difficulte, $Indice, $Explication,
 $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{
    try {
        $pdo = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $erreur) {
        throw new PDOException($erreur->getMessage());
    }

    if (!$Id) {
        die('L\'Id de la question doit être renseigné obligatoirement');
    }

    $query = $pdo->prepare('SELECT LIBELLE, DIFFICULTE, INDICE, EXPLICATION FROM QUESTION WHERE ID_QUESTION = ?');
    $query->execute([$Id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    /* si les arguments liés à la question ne sont pas renseignés, on les remplace par les valeurs de la base de données */
    
    if(empty($Libelle))
        $Libelle = $result['LIBELLE'];

    if($Difficulte != 1 && $Difficulte != 2)
        $Difficulte = $result['DIFFICULTE'];

    if(empty($Indice))
        $Indice = $result['INDICE'];
    
    if(empty($Explication))
        $Explication = $result['EXPLICATION'];

    /* récupération des 4 réponses */
    $query = $pdo->prepare('SELECT LIBELLE, BONNE_REP FROM REPONSE WHERE ID_QUESTION = ? ORDER BY ID_REP ASC LIMIT 4');
    $query->execute([$Id]);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    /* si les arguments liés aux réponses associées ne sont pas renseignés, on les remplace par les valeurs de la base de données */

    if(empty($Rep1))
        $Rep1 = $results[0]['LIBELLE'];
    if($Bon1 != 0 && $Bon1 != 1)
        $Bon1 = $results[0]['BONNE_REP'];

    if(empty($Rep2))
        $Rep2 = $results[1]['LIBELLE'];
    if($Bon2 != 0 && $Bon2 != 1)
        $Bon2 = $results[1]['BONNE_REP'];

    if(empty($Rep3))
        $Rep3 = $results[2]['LIBELLE'];
    if($Bon3 != 0 && $Bon3 != 1)
        $Bon3 = $results[2]['BONNE_REP'];
        
    if(empty($Rep4))
        $Rep4 = $results[3]['LIBELLE'];
    if($Bon4 != 0 && $Bon4 != 1)
        $Bon4 = $results[3]['BONNE_REP'];

    ModifieQuestionPdo("286642","ButInformatiqueBD",$Id, $Libelle, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4);
}

/** Fonctions de suppression*/
/* il faut avoir posté le formulaire de suppression, même avec des variables vides pour éviter d'arriver sur cette page sans être administrateur*/
function supprimeQuestionPdo($user,$pass,$ID_QUESTION) {
    try {
        $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
        $connexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $queryRep = $connexionBD->prepare('DELETE FROM REPONSE Where ID_QUESTION = ?;');
        $queryRep->execute([$ID_QUESTION]);
        $queryRep->closeCursor();

        $queryQ = $connexionBD->prepare('DELETE FROM QUESTION Where ID_QUESTION = ?;');
        $queryQ->execute([$ID_QUESTION]);
        $queryQ->closeCursor();

    } catch (PDOException $erreur) {
        echo "Erreur : " . $erreur->getMessage();
    }
}

/** Suppression| modification| insertion | Connexion sur la page*/

// supprimer une question
if (isset($_POST["suppression"])) {
    supprimeQuestionPdo("286642","ButInformatiqueBD",$_POST["id"]);
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
    VerifArgumentsPdo("286642","ButInformatiqueBD",$id, $libelle, $difficulte, $indice, $explication, $reponse1, $bonneRep1, $reponse2, $bonneRep2, $reponse3, $bonneRep3, $reponse4, $bonneRep4);
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
    AjouteQuestionPdo('286642','ButInformatiqueBD',$libelle, $theme, $difficulte, $indice, $explication, $reponse1, $bonneRep1, $reponse2, $bonneRep2, $reponse3, $bonneRep3, $reponse4, $bonneRep4);
    resultatAdmin();
}

/* function permettant de lancer la page de gestion d'administrateur si l'identifiant et le mot de passe entrés sont corrects */
function startConnexionAdmin() { 
    $action = $_POST['action'];
    $Identifiant = $_POST['id'];
    $motdepasse = $_POST['motDePasse'];
    if($action == 'valider') { 
        if($Identifiant == 'Patricia' & password_verify($motdepasse,trouveMotDePasseDeux("286642","ButInformatiqueBD"))) {
            resultatAdmin();
        }
        else {
        header("Location: https://quizzbutinfoaix.alwaysdata.net/pages/admin.php");
        exit;
        }
    }
}

/* code lançant la connexion Administrateur si l'on se connecter */
if(isset($_POST['action']) && isset($_POST['id']) && isset($_POST['motDePasse'])) {
    startConnexionAdmin();
}?>