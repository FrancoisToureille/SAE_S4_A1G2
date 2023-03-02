<?php
if(isset($_POST['spe'])){
    $spe = $_POST["spe"];
}
/*si la spécialité n'a pas été choisie(url direct vers jeux.php -> programmation comme spécialité par défaut)*/
else{
    $spe = "programmation";
}

/*fonction récupérant et affichant les réponses */
function reponses($id,$i){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    for ($j=0; $j < 4; $j++) { 
        $rep = null;
        $queryLib = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET ?;');
        mysqli_stmt_bind_param($queryLib, "ss", $id, $j);
        mysqli_execute($queryLib);
        mysqli_stmt_bind_result($queryLib, $rep);
        mysqli_stmt_fetch($queryLib);
        ?>
        <p id=<?php echo "rep" .$i .$j;?>> <?php echo $rep;?> </p>
        <?php
        mysqli_stmt_close($queryLib);

        $bon = null;
        $queryRep = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET ?;');
        mysqli_stmt_bind_param($queryRep, "ss", $id, $j);
        mysqli_execute($queryRep);
        mysqli_stmt_bind_result($queryRep, $bon);
        mysqli_stmt_fetch($queryRep);
        ?>
        <p id=<?php echo "bonOuMauvais" .$i .$j ?>> <?php if($bon==1){
            echo "bon";
        }
        else {
            echo "mauvais";
        }
        ?> </p>
        <?php
        mysqli_stmt_close($queryRep);

    }
}
?>

<?php 
/* Ici nous utilisons les mêmes types de fonctions qui permettent de récupérer 
et afficher les questions et réponses selon les spécialités*/
?>

<?php 
function questionsGeneralesUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='General' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 3;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 0;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "question" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsGenerales2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='General' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 3;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 5;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionGeneralDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsProgrammationUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Programmation' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsProgrammation2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Programmation' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionquestionSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsBDUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='BD' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionsSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsBD2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='BD' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionsSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsWebUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Web' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionsSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsWeb2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Web' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionsSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsSystemeUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Systeme' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsSysteme2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Systeme' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsReseauxUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Reseaux' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>
                        <?php reponses($row["ID_QUESTION"],$i);

                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsReseaux2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Reseaux' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
/*fonction indiquant quelle fonction de question un deux utiliser, en fonction de la spécialité choisie */
function questionsSpeUn($spe) {
    if($spe=="bd" || $spe=="bdMobile") {
        return questionsBDUn();
    }
    else if($spe=="reseaux" || $spe == "reseauxMobile") {
        return questionsReseauxUn();
    }
    else if($spe=="programmation" || $spe == "programmationMobile") {
        return questionsProgrammationUn();
    }
    else if($spe=="web" || $spe == "webMobile") {
        return questionsWebUn();
    }
    else if($spe=="systeme" || $spe == "systemeMobile") {
        return questionsSystemeUn();
    }
}
?>


<?php
/*fonction indiquant quelle fonction de question niveau deux utiliser, en fonction de la spécialité choisie */
function questionsSpeDeux($spe) {
    if($spe=="bd" || $spe=="bdMobile") {
        return questionsBD2();
    }
    else if($spe=="reseaux" || $spe == "reseauxMobile") {
        return questionsReseaux2();
    }
    else if($spe=="programmation" || $spe == "programmationMobile") {
        return questionsProgrammation2();
    }
    else if($spe=="web" || $spe == "webMobile") {
        return questionsWeb2();
    }
    else if($spe=="systeme" || $spe == "systemeMobile") {
        return questionsSysteme2();
    }
}


require "../view/vueJeux.php";