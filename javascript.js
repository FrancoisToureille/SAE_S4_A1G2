var listeTheme=["listeQuestionsWeb","listeQuestionsGenerales","listeQuestionsBD","listeQuestionsReseaux","listeQuestionsProgrammation"];

/** fonction ouvrant l'overlay et affichant des paragraphes et titres selon le choix réalisé par l'utilisateur*/ 
function setScreen(spe){
    /**Cache les vidéos tutorielles */
    document.getElementById('PopupWeb').style.display='none';
    document.getElementById('PopupRes').style.display='none';
    document.getElementById('PopupBd').style.display='none';
    document.getElementById('PopupProg').style.display='none';
    document.getElementById('PopupSys').style.display='none';

    document.getElementById('popup_video').style.display='none';
    if(spe == 'web' || spe == 'webMobile'){
        document.getElementById('titre_choix').innerHTML = "Qu'est-ce-que le web ?";
        document.getElementById('p_choix').innerHTML = "Le web, vous y êtes actuellement. Dans le web, on utilise différents langages comme le HTML pour la mise en page, le CSS pour le style graphique ou encore le javascript et le PHP pour rendre le site dynamique. Cette compétence plaira aux plus créatifs.";
    }
    else if(spe == 'reseaux'|| spe == 'reseauxMobile'){
        document.getElementById('titre_choix').innerHTML = "Que sont les réseaux ?";
        document.getElementById('p_choix').innerHTML = "En réseaux vous étudierez la communication entre machines grâce à différents protocoles comme le TCP, l'UDP ou le HTTP. Vous apprendrez aussi à déterminer des adresses IP ou encore comment créer un serveur et un client.";
    }
    else if(spe == 'bd'|| spe == 'bdMobile'){
        document.getElementById('titre_choix').innerHTML = "Que sont les bases de données ?";
        document.getElementById('p_choix').innerHTML = "Les bases de données servent à stocker des données que l'on peut ensuite récupérer et/ou manipuler. Par exemple, vous pourrez concevoir une base de données qui vous servira à établir des statistiques.";
    }
    else if(spe == 'programmation'|| spe == 'programmationMobile'){
        document.getElementById('titre_choix').innerHTML = "Qu'est-ce-que la programmation ?";
        document.getElementById('p_choix').innerHTML = "La programmation consiste à créer des algorithmes. Vous utiliserez de nombreux langages (C++, Python, Java) qui vous permettront de réaliser de nombreux projets.";
    }
    else if(spe == 'jsp'|| spe == 'jspMobile'){
        document.getElementById('titre_choix').innerHTML = "En quoi consiste le but Informatique ?";
        document.getElementById('p_choix').innerHTML = "Le monde de l'informatique vous est inconnu ? Vous êtes complètement perdu et ne savez ce que vous faites là ? Et bien ne vous inquiétez pas, vous êtes au bon endroit ! Voici quelques compétences apprises au cours du cursus : </br> - Les bases de données / sql </br>- Les réseaux </br>- La programmation fonctionnelle / C++ </br>- Le développement orienté objet / Java </br> Vous en apprendrez aussi plus sur l'organisation de votre futur diplôme.";
    }
    else if(spe == 'systeme'|| spe == 'systemeMobile'){
        document.getElementById('titre_choix').innerHTML = "Qu'est-ce-que l'étude des systèmes ?";
        document.getElementById('p_choix').innerHTML = "En système vous apprendrez à vous sentir à l'aise dans un environnement Linux et connaitre ses avantages. Vous apprendrez notamment comment utiliser un terminal, ce qu'est un dual boot ou encore une machine virtuelle.";
    }
    document.getElementById('popup').style.display= 'block';
    document.getElementById('popup').style.animation='slidePopUpIn 1s ease forwards';
    document.getElementById('specialite').innerHTML = spe;
}

/** //fonction affichant la vidéo correspondant à la spécialité choisie*/
function setVideoScreen(){ 
    
    var speList = ['web','programmation','bd','systeme','reseaux'];

    var spe = document.getElementById('specialite').innerHTML;
    document.getElementById('popup').style.display='none';

    /**tirage au sort du thème si la personne ne sait pas quoi prendre*/
    if(spe == 'jsp'|| spe == 'jspMobile'){  
        max = 4;
        min = 0;
        min = Math.ceil(min);
        max = Math.floor(max);
        speRandom = Math.floor(Math.random() * (max - min)) + min;
        spe = speList[speRandom];
    }

    if(spe == 'web' || spe == 'webMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Qu'est-ce-que le web ?";
        document.getElementById('PopupWeb').style.display='block';
        document.getElementById('speChoisie').value='web';

    }
    else if(spe == 'reseaux'|| spe == 'reseauxMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Que sont les réseaux ?";
        document.getElementById('PopupRes').style.display='block'; 
        document.getElementById('speChoisie').value='reseaux';

    }
    else if(spe == 'bd'|| spe == 'bdMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Que sont les bases de données ?";
        document.getElementById('PopupBd').style.display='block';     
        document.getElementById('speChoisie').value='bd';

    }
    else if(spe == 'programmation'|| spe == 'programmationMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Qu'est-ce-que la programmation ?";
        document.getElementById('PopupProg').style.display='block';
        document.getElementById('speChoisie').value='programmation';
    }
    
    else if(spe == 'systeme'|| spe == 'systemeMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Qu'est-ce-que l'étude des systèmes ?";
        document.getElementById('PopupSys').style.display='block';     
        document.getElementById('speChoisie').value='systeme';

    }
    /**permet d'afficher le pop up de vidéo avec une animation */
    document.getElementById('popup_video').style.display='block';
    document.getElementById('popup_video').style.animation='fadein 1s';
}

/** fonction fermant les pop ups avec une animation*/ 
function closeScreen(){ 
    document.getElementById('PopupWeb').style.display='none';
    document.getElementById('PopupRes').style.display='none';
    document.getElementById('PopupBd').style.display='none';
    document.getElementById('PopupProg').style.display='none';
    document.getElementById('PopupSys').style.display='none';
    document.getElementById('popup').style.animation='slidePopUpOut 1s ease forwards';
    setTimeout(() => {document.getElementById('popup').style.display='none'; 
    document.getElementById('popup').style.animation='none'}, 1000);
    document.getElementById('popup_video').style.animation='slidePopUpOut 1s ease forwards';
    setTimeout(() => {document.getElementById('popup_video').style.display='none';
    document.getElementById('popup_video').style.animation='none'}, 1000);
}

/** fonction permettant à l'administrateur d'accèder au formulaire supprimer*/
function afficherSupprimer() {
    document.getElementById("formInserer").style.display= "none";
    document.getElementById("formSupprimer").style.display= "initial";
    document.getElementById("formModifier").style.display= "none";
}
/** fonction permettant à l'administrateur d'accèder au formulaire inserer*/
/*function afficherInserer() {
    document.getElementById("formSupprimer").style.display= "none";
    document.getElementById("formInserer").style.display= "initial";
    document.getElementById("formModifier").style.display= "none";
}*/
function afficherModifier() {
    document.getElementById("formSupprimer").style.display= "none";
    document.getElementById("formInserer").style.display= "none";
    document.getElementById("formModifier").style.display= "initial";

}
function afficherListeQuestions(theme) {
    document.getElementById("formInserer").style.display = "none";
    for(let i = 0; i < listeTheme.length; ++i) {
        if(listeTheme[i]==theme) {
            if(document.getElementById(listeTheme[i]).style.display =="initial") {
                document.getElementById(listeTheme[i]).style.display ="none";
            }
            else {
                document.getElementById(listeTheme[i]).style.display ="initial";
            }
        }
        
        else {
            document.getElementById(listeTheme[i]).style.display ="none";
        }
    }
}

function afficheQuestionsTest(theme,nb){
    document.getElementById("formInserer").style.display = "none";
    var numeroQuestionCliquee = "question" + theme + parseInt(nb);
    if( document.getElementById(numeroQuestionCliquee).style.display != "initial") {
        document.getElementById(numeroQuestionCliquee).style.display = "initial";
    }
    else {
        document.getElementById(numeroQuestionCliquee).style.display = "none";
    }
}

function ouvrirFormulaireInsertion(theme) {

}

/** fonction permettant à l'administrateur d'accèder au formulaire inserer*/
function afficherInserer() {
    /** On ferme les div des questions sélectionnées auparavant */
    for(let i = 0; i < listeTheme.length; ++i) {
        document.getElementById(listeTheme[i]).style.display = "none";
    }
    /** On enlève le formulaire d'insertion s'il était déjà affiché*/
    if(document.getElementById("formInserer").style.display == "initial") {
        document.getElementById("formInserer").style.display = "none";
    }

    /** On affiche le formulaire d'insertion */
    document.getElementById("formInserer").style.display = "initial";
}

var themeOther = "<link id='theme' rel='stylesheet' href='/css/styleSombre.css' />";
var localStorage_theme = localStorage.getItem("themeCouleur");
var localStorage_themeFont = localStorage.getItem("themePolice");

window.addEventListener("load", switchTheme_avanced_init);

function switchTheme_avanced_onClick(e){
    e.preventDefault();

    if (localStorage_theme === undefined || localStorage_theme === "/css/styleGeneral"){
        localStorage_theme = "/css/styleSombre";
    } else {
        localStorage_theme = "/css/styleGeneral";
    }

    localStorage.setItem("themeCouleur", localStorage_theme);

    window.location.reload();
}

function switchTheme_avanced_init () {
    var localStorage_theme = localStorage.getItem("themeCouleur");
    var hhead = document.getElementsByTagName("head")[0];

    if (localStorage_theme === "/css/styleSombre"){
        hhead.innerHTML = hhead.innerHTML + themeOther;
    }
    else if(localStorage_theme === "/css/styleSombre" && localStorage_themeFont === "/css/stylePolice"){
        hhead.innerHTML = hhead.innerHTML + themeOther + themeOtherFont;
    }
}

////////////////////////////

var themeOtherFont = "<link id='theme' rel='stylesheet' href='/css/stylePolice.css' />";

window.addEventListener("load", switchThemeFont_avanced_init);

function switchThemeFont_avanced_onClick(e){
    e.preventDefault();

    if (localStorage_themeFont === undefined || localStorage_themeFont === "/css/styleGeneral"){
        localStorage_themeFont = "/css/stylePolice";
    } else {
        localStorage_themeFont = "/css/styleGeneral";
    }

    localStorage.setItem("themePolice", localStorage_themeFont);

    window.location.reload();
}

function switchThemeFont_avanced_init () {
    var localStorage_themeFont = localStorage.getItem("themePolice");
    var hhead = document.getElementsByTagName("head")[0];

    if (localStorage_themeFont === "/css/stylePolice"){
        hhead.innerHTML = hhead.innerHTML + themeOtherFont;
    }
    else if(localStorage_theme === "/css/styleSombre" && localStorage_themeFont === "/css/stylePolice"){
        hhead.innerHTML = hhead.innerHTML + themeOther + themeOtherFont;
    }
}
function closeScreenIntro() {
    for (let element of document.getElementsByClassName("menu")){
        element.style.display="initial";
    }
    document.getElementById('introMobile').style.display = "none";
    document.getElementById('intro').style.display="none";
}