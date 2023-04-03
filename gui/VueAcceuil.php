<?php
namespace gui;
include_once "Vue.php";

class VueAcceuil extends Vue {
    public function __construct($layout)
    {
        parent::__construct($layout);

        $this->headContent = '
            <title>Objectif BUT - Accueil</title>
            <script src="javascript.js"></script>
            <link rel="stylesheet" href="sources/css/styleAccueil.css">
            <meta name="description" content="Page d\'accueil du jeu Objectif BUT dans laquelle on peut avoir accès à différentes rubriques et visionner une vidéo de présentation">
        ';

        $this->content ='
            <header>
                <h1 class="titre">Objectif </h1>
                <h1> BUT</h1>
            </header>
            <div class="menu">
                <div class="presentation vignets">
                    <h2>
                        Présentation du BUT
                    </h2>
                    <div class="video"><iframe class="videoAnim videoCSS" src="https://www.youtube.com/embed/3HMh95gDKDI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="boutton_droite vignets">
                    <a href="/sae/index.php/choixSpe"><div class="lien transi">Jouer</div></a>
                    <a href="/sae/index.php/classement"><div class="lien transi2">Classement</div></a>
                    <a href="/sae/index.php/info"><div class="lien transi3">Infos</div></a>
                    <a href="/sae/index.php/contact"><div class="lien transi4">Nous contacter</div></a>
                </div>
            </div>
            <div class="menu2">
                <div class="presentation">
                    <h2>
                        Présentation du BUT
                    </h2>
                    <div class="video"><iframe class="videoAnim videoCSSResp" src="https://www.youtube.com/embed/3HMh95gDKDI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="boutton_droite">
                    <a href="/sae/index.php/choixSpe"><div class="lien">Jouer</div></a>
                    <a href="/sae/index.php/classement"><div class="lien">classement</div></a>
                </div>
                <div class="boutton_droite">
            
                    <a href="/sae/index.php/info"><div class="lien">Infos</div></a>
                    <a href="/sae/index.php/contact"><div class="lien">Nous contacter</div></a>
                </div>
            </div>
        ';


    }
}