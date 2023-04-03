<?php 
/*fonction démarrant la page de choix des spécialités*/
function start_choix_spe() { ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Objectif BUT - Choix d'une spécialité</title>
        <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" /> 
        <script src="../javascript.js"></script>
        <link rel="stylesheet" href="../css/styleChoix.css">
        <link rel="stylesheet" href="../css/styleGeneral.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <meta name="description" content="Page de choix d'une spécialité pour le jeu Objectif BUT">
    </head>
    <body>
        <header>
            <a href="../index.php"><h1 class="titre">Objectif </h1></a>
            <a href="../index.php"><h1> BUT</h1></a>
        </header>
       
        <div id="boutonMode">
            <a class="lienButton" style="color: white; " href="#" onClick="switchTheme_avanced_onClick(event)"> Mode sombre <i id="changetheme"></i></a>
        </div>

        <div id = "intro">
            <div id="corps_intro">
                <div class="video"><iframe id="videoIntro" class="videoPopUp videoAnim videoCSS" src="https://www.youtube.com/embed/YTPA91iKvG0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div id="txtIntro">
                        <p>Dans Objectif BUT, vous devrez répondre à une série de questions en rapport avec le but en général 
                            et une spécialité choisie afin d'avancer dans le plan du bâtiment et d'atteindre le BDE.</p>
                        <p>Des vidéos explicatives vous seront fournies comme celle ci-dessous afin de vous aider 
                            dans votre quête et d'en apprendre toujours plus.</p>
                        <p>Bonne chance, amusez-vous bien et peut être à bientôt dans notre BUT Informatique !</p>     
                </div>
            </div>
            <button class="valideChoix" id="valideChoixCol" onclick="closeScreenIntro()">OK</button>
        </div>

        <div id = "introMobile">
            <div id="corps_introMobile">
                <div class="video"><iframe id="videoIntroMobile" class="videoPopUp videoAnim videoCSS" src="https://www.youtube.com/embed/YTPA91iKvG0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div id="txtIntroMobile">
                    <p>Dans Objectif BUT, vous devrez répondre à une série de questions en rapport avec le but en général 
                            et une spécialité choisie afin d'avancer dans le plan du bâtiment et d'atteindre le BDE.</p>
                    <p>Des vidéos explicatives vous seront fournies comme celle ci-dessous afin de vous aider 
                            dans votre quête et d'en apprendre toujours plus.</p>
                    <p>Bonne chance, amusez-vous bien et peut être à bientôt dans notre BUT Informatique !</p></div>
            </div>
            <button class="valideChoix" id="valideChoixCol" onclick="closeScreenIntro()">OK</button>
        </div>

        <div class="menu">
            <div id="specialite">rien</div>
            <div id="popup">
                <div class="affiche">
                    <div class="enteteChoix">
                        <h3 id="titre_choix">.</h3>
                        <button class="bouton_popup" onclick="closeScreen()">X</button>
                    </div>
                    <div class="corpsChoix">
                        <p id="p_choix">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Fusce commodo quam nec ex bibendum sodales. Phasellus massa urna, finibus sit amet tortor eget, congue rutrum purus. 
                        Phasellus pellentesque mollis dolor. 
                        Mauris lacinia elementum nisl id luctus. 
                        Mauris sollicitudin eleifend tellus, ac convallis risus gravida id.
                        Sed eu tellus non leo finibus sodales et placerat odio. Donec commodo nulla quis pharetra semper. 
                        Sed eget risus sit amet ex mollis pharetra. Donec sed ante magna. In fringilla a quam non gravida. 
                        Fusce sit amet metus porttitor, congue est ultrices, vestibulum quam. Cras maximus aliquet nibh ac consequat.
                        </p>
                        <button id="continueChoix" onclick="setVideoScreen()">Continuer</button>
                    </div>
                </div>
            </div>
            <div id="popup_video">
                <div class="affiche">
                    <div class="enteteChoix">
                        <h3 id="titre_choixVideo">.</h3>
                        <button class="bouton_popup" onclick="closeScreen()">X</button>
                    </div>
                    <div class="corpsChoix">
                        <div id="PopupProg"><iframe class="videoPopUp" id="videoPopupProg" src="https://www.youtube.com/embed/3PQZ2zXfYnA" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="PopupRes"><iframe class="videoPopUp" id="videoPopupRes" src="https://www.youtube.com/embed/bp8E4XF4Tkc" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="PopupWeb"><iframe class="videoPopUp" id="videoPopupWeb" src="https://www.youtube.com/embed/Cmd2GVvYiHY" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="PopupBd"><iframe class="videoPopUp" id="videoPopupBd" src="https://www.youtube.com/embed/fdG3iNcijak" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="PopupSys"><iframe class="videoPopUp" id="videoPopupSys" src="https://www.youtube.com/embed/JCcNxriEx44" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <form method="post" action="jeux.php"> 
                            <input id="speChoisie" type="text" name="spe" value="nonDefinie">
                            <input type="submit" id="jeux" class="valideChoix" value = "Valider mon choix"> 
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <div id="titreChoix">Vers quel domaine pensez-vous vous diriger ?</div>
            </div>
            <div class="ensembleBouton">
                <div class="bouton transi">
                    <button id="reseaux" class="lien" onclick="setScreen(this.id)">Réseaux</button>
                    <button id="web" class="lien" onclick="setScreen(this.id)">Web</button>
                </div>
                <div class="bouton transi2">
                    <button id="bd" class="lien" onclick="setScreen(this.id)">Base de données</button>
                    <button id="programmation" class="lien" onclick="setScreen(this.id)">Programmation</button>
                </div>
                <div class="bouton transi3">
                    <button id="systeme" class="lien" onclick="setScreen(this.id)">Système/Crypto</button>
                    <button id="jsp" class="lien" onclick="setScreen(this.id)">Je ne sais pas</button>
                </div>
            </div>


            <div class="ensembleBouton2">
                <div class="bouton">
                    <button id="reseauxMobile" onclick="setScreen(this.id)">Réseaux</button>
                    <button id="webMobile" onclick="setScreen(this.id)">Web</button>
                </div>
                <div class="bouton">
                    <button id="bdMobile" onclick="setScreen(this.id)">Base de données</button>
                    <button id="programmationMobile" onclick="setScreen(this.id)">Programmation</button>
                </div>
                <div class="bouton">
                    <button id="systemeMobile" onclick="setScreen(this.id)">Système/Crypto</button>
                    <button id="jspMobile" onclick="setScreen(this.id)">Je ne sais pas</button>
                </div>
            </div>
        </div>
    </body>
</html>
<?php } start_choix_spe(); ?>