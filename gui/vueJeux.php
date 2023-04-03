<?php $spe = $_POST['spe']; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/x-icon" href="../sources/images/Bachelor.ico" sizes="96x96" />
    <title>Objectif BUT - Jeu</title>
    <script src="../jeux.js"></script>
    <link rel="stylesheet" href="../sources/css/styleJeux.css">
    <link rel="stylesheet" href="../sources/css/stylePlan.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="Page du jeu Objectif BUT après avoir choisi une spécialté">
</head>
<body>
<div id="popup_video">
    <div class="affiche">
        <div class="enteteChoix">
            <h3 id="titre_choixVideo">.</h3>
            <button class="bouton_popup" onclick="closeScreenJeux()">X</button>
        </div>
        <div class="corpsChoix">
            <div id="PopupProg"><iframe class="videoLvl2" id="videoPopupProg" src="https://www.youtube.com/embed/Pu_ezhrOhrw" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <div id="PopupRes"><iframe class="videoLvl2" id="videoPopupRes" src="https://www.youtube.com/embed/R_FrLDrPbis" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <div id="PopupWeb"><iframe class="videoLvl2" id="videoPopupWeb" src="https://www.youtube.com/embed/SVuBQ5sImxM" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <div id="PopupBd"><iframe class="videoLvl2" id="videoPopupBd" src="https://www.youtube.com/embed/YN_EONlvjjs" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <div id="PopupSys"><iframe class="videoLvl2" id="videoPopupSys" src="https://www.youtube.com/embed/xD_hwXqluBk" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <div id="jeux" class="valideChoix" onclick="closeScreenJeux()">OK</div>
        </div>
    </div>
</div>
<div class="affichage">
    <div class="affichage_gauche">
        <div id = "plan">
            <!-- source de l'image de couronne <a id = "lienFreepik" href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a> -->
            <!--2e étage-->
            <table>
                <tr>
                    <th class="section7" id="case_2E_2_1" colspan="3"></th>
                    <th class="section8" id="case_2E_2_2" colspan="2"></th>
                    <th class="section8" id="case_2E_2_3" colspan="2"></th>
                    <th class="section9" id="case_2E_2_4" colspan="2"></th>
                    <th                  id="case_2E_2_5"></th>
                </tr>
                <tr>
                    <th colspan="10" class="couloir" id="couloir2E"></th>
                </tr>
                <tr>
                    <th class="section7" id="case_2E_1_1"></th>
                    <th class="section7" id="case_2E_1_2"></th>
                    <th class="section7" id="case_2E_1_3"></th>
                    <th class="section8" id="case_2E_1_4"></th>
                    <th class="section8" id="case_2E_1_5"></th>
                    <th class="section8" id="case_2E_1_6"></th>
                    <th class="section9" id="case_2E_1_7"></th>
                    <th class="section9" id="case_2E_1_8"></th>
                    <th class="section9" id="case_2E_1_9"></th>
                    <th class="section9" id="case_2E_1_10"></th>
                </tr>
            </table>

            <!--1er étage-->
            <table>
                <tr>
                    <th class="section6" id="case_1E_2_1" colspan="2"></th>
                    <th class="section5" id="case_1E_2_2" colspan="2"></th>
                    <th class="section5" id="case_1E_2_3" colspan="2"></th>
                    <th class="section4" id="case_1E_2_4" colspan="2"></th>
                    <th class="section4" id="case_1E_2_5"></th>
                </tr>
                <tr>
                    <th colspan="9" class="couloir" id="couloir1E"></th>
                </tr>
                <tr>
                    <th class="section6" id="case_1E_1_1"></th>
                    <th class="section6" id="case_1E_1_2"></th>
                    <th class="section6" id="case_1E_1_3"></th>
                    <th class="section5" id="case_1E_1_4"></th>
                    <th class="section5" id="case_1E_1_5"></th>
                    <th class="section5" id="case_1E_1_6"></th>
                    <th class="section5" id="case_1E_1_7"></th>
                    <th class="section4" id="case_1E_1_8"></th>
                    <th class="section4" id="case_1E_1_9"></th>
                </tr>
            </table>

            <!--RDC-->
            <table>
                <tr>
                    <th class="section1" id="case_RDC_3_1" colspan="3"></th>
                    <th class="section2" id="case_RDC_3_2" colspan="3"></th>
                    <th class="section2" id="case_RDC_3_3"></th>
                    <th class="section3" id="case_RDC_3_4"></th>
                    <th class="section3" id="case_RDC_3_5"></th>
                    <th class="section3" id="case_RDC_3_6"></th>
                </tr>
                <tr>
                    <th colspan="10" class="couloir" id="couloirRDC"></th>
                </tr>
                <tr>
                    <th class="section1" id="case_RDC_2_1"></th>
                    <th class="section1" id="case_RDC_2_2"></th>
                    <th                  id="case_RDC_2_3"></th>
                    <th                  id="case_RDC_2_4"></th>
                    <th class="section2" id="case_RDC_2_5"></th>
                    <th class="section2" id="case_RDC_2_6"></th>
                    <th class="section2" id="case_RDC_2_7"></th>
                    <th class="section3" id="case_RDC_2_8"></th>
                    <th class="section3" id="case_RDC_2_9"></th>
                    <th class="section3" id="case_RDC_2_10"></th>
                </tr>
                <tr>
                    <th class="section1" id="case_RDC_1_1"></th>
                    <th class="section1" id="case_RDC_1_2"></th>
                    <th class="section1" id="case_RDC_1_3"></th>
                    <th class="section2" id="case_RDC_1_4"></th>
                    <th class="section2" id="case_RDC_1_5"></th>
                    <th class="section2" id="case_RDC_1_6"></th>
                    <th class="section2" id="case_RDC_1_7"></th>
                    <th class="section3" id="case_RDC_1_8"></th>
                    <th class="section3" id="case_RDC_1_9"></th>
                    <th class="section3" id="case_RDC_1_10"></th>
                </tr>
            </table>
        </div>
        <div class="bot">

        </div>
    </div>

    <div id="blockFinQuizz">
        <form id="formFinQuizz" method ="post" action="finJeux.php">
            <input id="score" name="score" type="number" value="0">
            <input id="speChoisie" type="text" name="spe" value=<?php echo($spe);?>>
            <input id="versFin" type="submit">
        </form>
    </div>

    <div class="affichage_droite">
        <div class="entete">
            <div class="num_question">
                <h3 id ="num">0</h3>
            </div>
            <header>
                <h1 class="titre">Objectif </h1>
                <h1> BUT</h1>
            </header>
        </div>
        <div id="corps_question">
            <div id="blockQuizz">
                <div class="question">
                    <h2 id="questionPosee">clique sur oui</h2>
                </div>
                <div class="reponse">
                    <div class="reponseLigne">
                        <button id="rep1" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionne(this.id)">non</button>
                        <button id="rep2" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionne(this.id)">non</button>
                    </div>
                    <div class="reponseLigne">
                        <button id="rep3" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionne(this.id)">oui</button>
                        <button id="rep4" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionne(this.id)">non</button>
                    </div>
                </div>
                <div class="soumettre">

                    <button id="soumettre" onclick="cliqueValiderOuContinuer(this.id)">Valider</button>
                </div>
                <div id="specialite"><?php
                    echo $spe; ?></div>
            </div>
        </div>



        <div id="boiteCarteAideBot">
            <div id="aideBot">
                <div id="barreNavBot">
                    <p id="titreBot">Help Bot</p>
                    <p id="tempsRestant"></p>
                    <img alt="logoBoutonBotHaut" id="logoBoutonBotHaut" class="logoBoutonBot" src="../sources/images/bot.png" onclick = "ouvrirBot()">
                    <img alt="logoBoutonBotBas" id="logoBoutonBotBas" class="logoBoutonBot" src="../sources/images/flechehaut.png"
                         onclick = "fermerBot()">

                </div>
                <div id="chatBot">

                </div>
            </div>
        </div>
    </div>
</div>


<div class="affichageMobile">
    <div class="affichage_gauche">

        <div class="bot">

        </div>
    </div>


    <div class="affichage_droite">
        <div class="entete">

            <header>
                <h1 class="titre">Nom</h1>
                <h1>du jeu</h1>
            </header>

        </div>
        <div class="num_question">
            <h3 id ="numMobile">0</h3>
            <img alt="logoCarte" id="carte" class="logoCarte" src="../sources/images/carte.png"
                 onclick = "afficherCarte()">
        </div>
        <div id = "planMobile">
            <!--<a id = "lienFreepik" href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a> -->
            <!--2e étage-->
            <table>
                <tr>
                    <th class="section7" id="case_2E_2_1Mobile" colspan="3"></th>
                    <th class="section8" id="case_2E_2_2Mobile" colspan="2"></th>
                    <th class="section8" id="case_2E_2_3Mobile" colspan="2"></th>
                    <th class="section9" id="case_2E_2_4Mobile" colspan="2"></th>
                    <th                  id="case_2E_2_5Mobile"></th>
                </tr>
                <tr>
                    <th colspan="10" class="couloir" id="couloir2EMobile"></th>
                </tr>
                <tr>
                    <th class="section7" id="case_2E_1_1Mobile"></th>
                    <th class="section7" id="case_2E_1_2Mobile"></th>
                    <th class="section7" id="case_2E_1_3Mobile"></th>
                    <th class="section8" id="case_2E_1_4Mobile"></th>
                    <th class="section8" id="case_2E_1_5Mobile"></th>
                    <th class="section8" id="case_2E_1_6Mobile"></th>
                    <th class="section9" id="case_2E_1_7Mobile"></th>
                    <th class="section9" id="case_2E_1_8Mobile"></th>
                    <th class="section9" id="case_2E_1_9Mobile"></th>
                    <th class="section9" id="case_2E_1_10Mobile"></th>
                </tr>
            </table>

            <!--1er étage-->
            <table>
                <tr>
                    <th class="section6" id="case_1E_2_1Mobile" colspan="2"></th>
                    <th class="section5" id="case_1E_2_2Mobile" colspan="2"></th>
                    <th class="section5" id="case_1E_2_3Mobile" colspan="2"></th>
                    <th class="section4" id="case_1E_2_4Mobile" colspan="2"></th>
                    <th class="section4" id="case_1E_2_5Mobile"></th>
                </tr>
                <tr>
                    <th colspan="9" class="couloir" id="couloir1EMobile"></th>
                </tr>
                <tr>
                    <th class="section6" id="case_1E_1_1Mobile"></th>
                    <th class="section6" id="case_1E_1_2Mobile"></th>
                    <th class="section6" id="case_1E_1_3Mobile"></th>
                    <th class="section5" id="case_1E_1_4Mobile"></th>
                    <th class="section5" id="case_1E_1_5Mobile"></th>
                    <th class="section5" id="case_1E_1_6Mobile"></th>
                    <th class="section5" id="case_1E_1_7Mobile"></th>
                    <th class="section4" id="case_1E_1_8Mobile"></th>
                    <th class="section4" id="case_1E_1_9Mobile"></th>
                </tr>
            </table>

            <!--RDC-->
            <table>
                <tr>
                    <th class="section1" id="case_RDC_3_1Mobile" colspan="3"></th>
                    <th class="section2" id="case_RDC_3_2Mobile" colspan="3"></th>
                    <th class="section2" id="case_RDC_3_3Mobile"></th>
                    <th class="section3" id="case_RDC_3_4Mobile"></th>
                    <th class="section3" id="case_RDC_3_5Mobile"></th>
                    <th class="section3" id="case_RDC_3_6Mobile"></th>
                </tr>
                <tr>
                    <th colspan="10" class="couloir" id="couloirRDCMobile"></th>
                </tr>
                <tr>
                    <th class="section1" id="case_RDC_2_1Mobile"></th>
                    <th class="section1" id="case_RDC_2_2Mobile"></th>
                    <th                  id="case_RDC_2_3Mobile"></th>
                    <th                  id="case_RDC_2_4Mobile"></th>
                    <th class="section2" id="case_RDC_2_5Mobile"></th>
                    <th class="section2" id="case_RDC_2_6Mobile"></th>
                    <th class="section2" id="case_RDC_2_7Mobile"></th>
                    <th class="section3" id="case_RDC_2_8Mobile"></th>
                    <th class="section3" id="case_RDC_2_9Mobile"></th>
                    <th class="section3" id="case_RDC_2_10Mobile"></th>
                </tr>
                <tr>
                    <th class="section1" id="case_RDC_1_1Mobile"></th>
                    <th class="section1" id="case_RDC_1_2Mobile"></th>
                    <th class="section1" id="case_RDC_1_3Mobile"></th>
                    <th class="section2" id="case_RDC_1_4Mobile"></th>
                    <th class="section2" id="case_RDC_1_5Mobile"></th>
                    <th class="section2" id="case_RDC_1_6Mobile"></th>
                    <th class="section2" id="case_RDC_1_7Mobile"></th>
                    <th class="section3" id="case_RDC_1_8Mobile"></th>
                    <th class="section3" id="case_RDC_1_9Mobile"></th>
                    <th class="section3" id="case_RDC_1_10Mobile"></th>
                </tr>
            </table>
        </div>
        <div id="corps_questionMobile">
            <div id="blockQuizzMobile">
                <div class="question">
                    <h2 id="questionPoseeMobile">clique sur oui</h2>
                </div>
                <div class="reponse">
                    <div class="reponseLigne">
                        <button id="rep1Mobile" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionneMobile(this.id)">non</button>

                        <button id="rep2Mobile" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionneMobile(this.id)">non</button>
                    </div>
                    <div class="reponseLigne">
                        <button id="rep3Mobile" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionneMobile(this.id)">oui</button>
                        <button id="rep4Mobile" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionneMobile(this.id)">non</button>
                    </div>
                </div>
                <div class="soumettre">

                    <button id="soumettreMobile" onclick="cliqueValiderOuContinuerMobile(this.id)">Valider</button>
                </div>
                <div id="specialiteMobile"><?php echo $spe; ?></div>
            </div>
        </div>


        <div id="boiteCarteAideBotMobile">
            <div id="aideBotMobile">
                <div id="barreNavBotMobile">
                    <p id="titreBotMobile">Help Bot</p>
                    <p id="tempsRestantMobile"></p>
                    <img alt="logoBoutonBotHaut" id="logoBoutonBotHautMobile" class="logoBoutonBot" src="../sources/images/bot.png" onclick = "ouvrirBot()">
                    <img alt="logoBoutonBotBas" id="logoBoutonBotBasMobile" class="logoBoutonBot" src="../sources/images/flechehaut.png"
                         onclick = "fermerBot()">

                </div>
                <div id="chatBotMobile">

                </div>
            </div>
        </div>
        <div id="blockFinQuizzMobile">
            <form id="formFinQuizzMobile" method ="post" action="finJeux.php">
                <input id="scoreMobile" name="score" type="number" value="0">
                <input id="speChoisieMobile" type="text" name="spe" value=<?php echo($spe);?>>
                <input id="versFinMobile" type="submit">
            </form>
        </div>

    </div>
</div>
<div id = "recuperationQuestions">
    <div id="questionsGeneralesUn"><h3>Questions Generales 1</h3><?php questionsGeneralesUn();?></div>
    <div id="questionsSpecialiteUn"><h3>Questions Specialite 1</h3><?php questionsSpeUn($spe);?></div>


    <div id="questionsGeneralesDeuxUn"><h3>Questions Generales 2</h3><?php questionsGenerales2();?></div>
    <div id="questionsSpecialitedeux"><h3>Questions Specialite 2</h3><?php questionsSpeDeux($spe);?></div>
</div>
</body>
</html>
