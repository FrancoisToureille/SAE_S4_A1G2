<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Objectif BUT - Classement</title>
    <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" />
    <script src="./javascript.js"></script>
    <link rel="stylesheet" href="../css/styleClassement.css">
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
<div class="menu">
    <table id="classement_tab" class="vignets">
        <tr id="premiere_ligne">
            <th>#</th>
            <th>Pseudo</th>
            <th>Spécialité</th>
            <th>Score</th>
        </tr>

        <?php $x = 0; ?>
        <?php $pos = 1; ?>
        <?php while($nb > $x/3) { ?>
            <tr>
                <td><?php echo $pos; $pos += 1; ?></td>
                <td><?php echo $e[$x]; $x = $x + 1; ?></td>
                <td><?php echo $e[$x]; $x = $x + 1; ?></td>
                <td><?php echo $e[$x]; $x = $x + 1;?></td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>