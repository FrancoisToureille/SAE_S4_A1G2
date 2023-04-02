<?php 
/*fonction démarrant la page contact */
function startContact() { ?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <!--<script src="https://kit.fontawesome.com/8e09982db4.js" crossorigin="anonymous"></script>-->
            <title>Objectif BUT - Nous Contacter</title>
            <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" /> 
            <script src="../javascript.js"></script>
            <link rel="stylesheet" href="../css/styleContact.css">
            <link rel="stylesheet" href="../css/styleGeneral.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
            <meta name="description" content="Page de contact du jeu Objectif BUT">
        </head>
        <body>
            <header>
                <div class="entete_info">
                    <div class="rubrique_menu"><a href="../index.php"><img id="return" alt="retour" src="../images/maison.png"></a></div>
                    <div class="rubrique_menu"><h1 class="contact_titre">Nous contacter</h1></div>
                </div>
            </header>
            <div id="boutonMode">
                <a class="lienButton" style="color: white; " href="#" onClick="switchTheme_avanced_onClick(event)"> Mode sombre <i id="changetheme"></i></a>
                <a class="lienButton" id="changeFont" style="color: white; width: 150px;" href="#" onClick="switchThemeFont_avanced_onClick(event)"> Mode taille police agrandie <i id="changetheme"></i></a>
            </div>
            <div class="menu">
                <div class="presentation_form vignets">
                    <div class="titre_mail">
                        Formulaire :
                    </div>
                    <form name="form" action="mailto:toureillfrancois@gmail.com" method="post" enctype="text/plain">
                        <div class="info_mail">
                            <div class="nom_prenom">
                                <input class="nom" name="nom" type="text" placeholder="Nom">
                                <input class="prenom" name="prenom" type="text" placeholder="Prenom">
                            </div>
                        </div>
                        <div class="p_mail">
                            <textarea class="p_mail" name="texte" placeholder="Qu'avez-vous pensés du jeu ?"></textarea>
                        </div>
                        <div class="valide_form">
                            <input type="submit"  class="valideChoix" value="Valider">
                        </div>
                    </form>
                </div>
            </div>
            <div class="menu2">
                <div class="presentation_form">
                    <div class="titre_mail">
                        Formulaire :
                    </div>
                    <form name="form" action="mailto:toureillfrancois@gmail.com" method="post" enctype="text/plain">
                        <div class="info_mail">
                            <div class="nom_prenom">
                                <input class="nom" type="text" placeholder="Nom">
                                <input class="prenom" type="text" placeholder="Prenom">
                            </div>
                        </div>
                        <div class="p_mail">
                            <textarea class="p_mail" placeholder="Qu'avez-vous pensés du jeu ?"></textarea>
                        </div>
                        <div class="valide_form">
                            <input type="submit"  class="valideChoix" value="Valider">
                        </div>
                    </form>
                </div>
            </div>
        </body>
    </html>
<?php } ?>
<?php startContact(); ?>