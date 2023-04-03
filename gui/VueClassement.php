<?php
namespace gui;
include_once "Vue.php";

class VueClassement extends Vue
{
    public function __construct($layout, $presenter)
    {
        parent::__construct($layout);

        $this->headContent = '
            <title>Objectif BUT - Classement</title>
            <script src="../javascript.js"></script>
            <link rel="stylesheet" href="../sources/css/styleClassement.css">
            <meta name="description" content="Page de classement des résultats du jeu Objectif BUT">
        ';

        $this->content = '
            <body>
            <header>
                <div class="entete_info">
                    <div class="rubrique_menu"><a href="../index.php"><img id="return" alt="retour" src="../sources/images/maison.png"></a></div>
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
                    </tr>';

        $this->content .= $presenter->getAllGagnantHTML();

        $this->content .='                      
                </table>
            </div>
            ';
    }
}