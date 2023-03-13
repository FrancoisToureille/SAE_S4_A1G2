<?php
function mauvaisOuBon($booleen) {
    for($i = 0; $i<7; $i=$i+2) {
        if($booleen[$i]==1) {
            echo "bon ";
        }
        elseif($booleen[$i]==0){
            echo "mauvais ";
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
                        <button id="questionsGenerales" onclick="afficherListeQuestions('listeQuestionsGenerales')">Questions Generales</button>

                        <button id="questionsWeb" onclick="afficherListeQuestions('listeQuestionsWeb')">Questions Web</button>
                        
                        <button id="questionsBD" onclick="afficherListeQuestions('listeQuestionsBD')">Questions BD</button>
                    </div>

                    <div style="display:flex; flex-direction:row; justify-content:space-between;">

                        <button id="questionsReseaux" onclick="afficherListeQuestions('listeQuestionsReseaux')">Questions Reseaux</button>

                        <button id="questionsProgrammation" onclick="afficherListeQuestions('listeQuestionsProgrammation')">Questions Programmation</button>
                        
                        <button onclick="afficherInserer()">Insérer</bouton>             

                    </div>

                </div>
                <form id ="formInserer" style="display:none" action="inserer.php" method="POST">  
                  
                    <input name="libelle" type="text"  placeholder="Libelle" placeholder="libelle">
                    
                    <select name="theme">
                        <option>theme</option>
                        <option value="General">Général</option>
                        <option value="BD">BD</option>
                        <option value="Programmation">Programmation</option>
                        <option value="Reseaux">Réseaux</option>
                        <option value="Web">Web</option>
                        <option value="Systeme">Système</option>
                    
                    </select>

                    <select name="difficulte">
                        <option>difficulté(1 ou 2)</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                    </select>

                    <input id="indice" name="indice" type="text" placeholder="indice">

                    <input id="explication" name="explication" type="text" placeholder="explication">

                    <input id="reponse1" name="reponse1" type="text" placeholder="réponse 1">
                    <select name="bonneRep1">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>

                    <input id="reponse2" name="reponse2" type="text" placeholder="réponse 2">
                    <select name="bonneRep2">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>

                    <input id="reponse3" name="reponse3" type="text" placeholder="réponse 3">
                    <select name="bonneRep3">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>

                    <input id="reponse4" name="reponse4" type="text" placeholder="réponse 4">
                    <select name="bonneRep4">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>

                    <input type="submit" name="action" value="Insérer"/>
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

function boutonTheme($theme,$numeroQuestion){
    if($theme == "Web") {?>
        <button style="margin:20px;" onclick="afficheQuestionsTest('Web',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
    else if($theme == "General") {?>
        <button style="margin:20px;" onclick="afficheQuestionsTest('General',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }

    else if($theme == "BD") {?>
        <button style="margin:20px;" onclick="afficheQuestionsTest('BD',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
    else if($theme == "Reseaux") {?>
        <button style="margin:20px;" onclick="afficheQuestionsTest('Reseaux',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
    else if($theme == "Programmation") {?>
        <button style="margin:20px;" onclick="afficheQuestionsTest('Programmation',<?php echo $numeroQuestion;?>)"> question <?php echo $numeroQuestion; ?></button>
    <?php
    }
}


function donneListe($THEME,$user,$pass){

    $connexionBD = new PDO('mysql:host=mysql-quizzbutinfoaix.alwaysdata.net;dbname=quizzbutinfoaix_bd', $user, $pass);
 //on appelle le pdo

    // On ecris la requette avec les paramettres de la fonction
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
                <form class ="formModifier" action="modifier.php" method="POST">
                    <input name="id" style="display:none" type="text" value =<?php echo $result[$i]['ID_QUESTION'];?>>
                    <input name="libelle" type="text"  placeholder="Libelle" placeholder="libelle">
                    <select name="difficulte" placeholder="1 bon, 0 mauvais">
                        <option>difficulté(1 ou 2)</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                    </select>
                    <input id="indice" name="indice" type="text" placeholder="indice">
                    <input id="explication" name="explication" type="text" placeholder="explication">
                    <input id="reponse1" name="reponse1" type="text" placeholder="réponse 1">
                    <select name="bonneRep1" placeholder="1 bon, 0 mauvais">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>
                    <input id="reponse2" name="reponse2" type="text" placeholder="réponse 2">
                    <select name="bonneRep2" placeholder="1 bon, 0 mauvais">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>
                    <input id="reponse3" name="reponse3" type="text" placeholder="réponse 3">
                    <select name="bonneRep3" placeholder="1 bon, 0 mauvais">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>
                    <input id="reponse4" name="reponse4" type="text" placeholder="réponse 4">
                    <select name="bonneRep4" placeholder="1 bon, 0 mauvais">
                        <option>mauvais ou bon</option>
                        <option value=0>mauvais</option>
                        <option value=1>bon</option>
                    </select>
                    <input type="submit" name="action" value="Modifier"/>
                </form>


                <div class = "libelleQuestion">
                    <h3>Question : </h3>
                    <?php echo $result[$i]['LIBELLE'];?>
                </div>

                <div class = "difficulteQuestion">
                        <h3>Difficulté : </h3>
                        <?php echo $result[$i]['DIFFICULTE'];?>                   
                </div>

                <div class = "indiceQuestion">
                    <h3>Indice : </h3>
                    <?php echo $result[$i]['INDICE'];?>
                </div>

                <div class = "explicationQuestion">
                    <h3>Explication : </h3>
                        <?php echo $result[$i]['EXPLICATION'];?> 
                </div>

                <div class = "reponses">
                    <h3>Reponses : </h3>
                        <?php echo $result[$i]['REPONSES'];?> 
                </div>

                <div class = "validites">
                    <h3>Reponses Valides ou non : </h3>
                        <?php echo mauvaisOuBon($result[$i]['VALIDITES']);?> 
                </div>
            </div>
            <?php
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