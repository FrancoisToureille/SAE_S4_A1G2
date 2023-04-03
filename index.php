<?php

include_once "DataAccess.php";

include_once "control/Presenter.php";

include_once "gui/Layout.php";
include_once "gui/VueAcceuil.php";
include_once "gui/VueClassement.php";
include_once "gui/VueInfo.php";
include_once "gui/VueContact.php";
include_once "gui/VueChoixSpe.php";

use gui\{Layout, VueAcceuil, VueClassement, VueInfo, VueContact, VueChoixSpe};
use control\{Presenter};


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$presenter = new Presenter();

if ( '/sae/' == $uri || '/sae/index.php' == $uri) {
    $layout = new Layout("gui/layout.html");
    $vueAcceuil = new VueAcceuil($layout);

    $vueAcceuil->display();
}
elseif ( '/sae/index.php/info' == $uri) {
    $layout = new Layout("gui/layout.html");
    $vueInfo = new VueInfo($layout);

    $vueInfo->display();
}
elseif ( '/sae/index.php/contact' == $uri) {
    $layout = new Layout("gui/layout.html");
    $vueContact = new VueContact($layout);

    $vueContact->display();
}
elseif ( '/sae/index.php/classement' == $uri) {
    if (isset($_POST['pseudo'])) {
        $pseudo=$_POST['pseudo'];
        $score=$_POST['score'];
        $spe = $_POST["spe"];
        AjouteGagnant($pseudo,$score,$spe);
    }

    $layout = new Layout("gui/layout.html");
    $vueClassement = new  VueClassement($layout, $presenter);

    $vueClassement->display();
}
elseif ( '/sae/index.php/choixSpe' == $uri) {
    $layout = new Layout("gui/layout.html");
    $vueChoixSpe = new VueChoixSpe($layout);

    $vueChoixSpe->display();
}
elseif ('/sae/index.php/jeux' == $uri){
    $layout = new Layout("gui/layout.html");
}