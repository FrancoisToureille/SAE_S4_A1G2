<!-- fonctions pour classement -->
<?php
/*fonction permettant d'ajouter un gagnant dans la base de données*/
function AjouteGagnant($pseudo, $score,$spe)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryReponse = mysqli_prepare($dbLink, 'INSERT Into GAGNANT(NOM_GAGNANT, SCORE,SPECIALITE) Values (?, ?, ?);');
    mysqli_stmt_bind_param($queryReponse, "sss", $pseudo, $score, $spe);
    mysqli_execute($queryReponse);
    mysqli_stmt_close($queryReponse);
}

/*fonction permettant de renvoyer la liste des gagnants dans la base de données*/
function recupGagnant() {
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT * FROM GAGNANT ORDER BY SCORE DESC';
    $result = mysqli_query($dbLink, $query);
    if (!$result)
    {
        echo 'Impossible d\'exécuter la requête ', $query, ' : ', mysqli_error($dbLink);
    }
    else
    {
        if (mysqli_num_rows($result) != 0)
        {
            $listeGagnant=array();
            while ($row = mysqli_fetch_assoc($result))
            {

                $listeGagnant[] = $row['NOM_GAGNANT'];
                $listeGagnant[] = $row['SPECIALITE'];
                $listeGagnant[] = $row['SCORE'];

            }
            return $listeGagnant;
        }
    }
}
?>

<!-- fonctions pour choixSpe -->
<?php