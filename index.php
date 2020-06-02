<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowwi</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/fluide.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/script.js"></script>


</head>

<body>
    <div class="accueil" id="accueil">
        <header>
                <img src="./assets/img/flowwi/logo-flowwi.png" alt="logo" class="logo">
                <img src="./assets/img/flowwi/flowwi.png" alt="flowwi" class="flowwi">
           <h2 class="courant">Suivez votre courant</h2>
            <a href="./voyage-rapide/">Voyage rapide</a>
            <a href="./a-propos/">À propos</a>
        </header>
        <img src="./assets/img/persos-histoire/perso-flowwi-8.png" alt="personnage" class="f-orange">
        <img src="./assets/img/persos-histoire/perso-flowwi-2.png" alt="personnage" class="g-violet">
        <a href="#niveau-bac" class="start" id="start">démarrer</a>

        
        
            <p class="txt intro">Bienvenue sur Flowwi ! Besoin d’aide pour trouver ta voie après ton DUT MMI ? Nous sommes là pour t’aider ! Fais tes choix en fonction de tes préférences et n’oublies pas de suivre ton courant !
            </p>

            <p class="txt intro2">Clique sur "démarrer" pour commencer l’aventure et trouver ta future formation !</p>
    
    </div>

    <div class="niveau" id="niveau-bac">
    <a href="#accueil" class="back"> < Retour en arrière</a> 
        
            <section class="bulle-b">
                <p>Quel niveau souhaites-tu obtenir à la fin de tes études ?</p>
                </section>
                <section class="bac">
                    <a href="#type" class="bac3" id="bac3">Bac +3</a>
                    <a href="#type" class="bac5" id="bac5">Bac +5</a>
                </section>

                <img src="./assets/img/persos-histoire/perso-flowwi-6.png" alt="personnage" class="f-rouge">
                <section>
                    <p class="txt niv-f">Voici la première étape. Vers quel chemin souhaites-tu aller ?</p>
                </section>

    </div>

    <div class="type" id="type">
        <a href="#niveau-bac" class="back">
            < Retour en arrière</a> <section class="bulle-v">
                <p class="bulle-type">Quel type de formation recherches-tu?</p>
                </section>
                <section class="option-f">
                    <a href="#specialite" class="initial" id="initiale">Initiale</a>
                    <a href="#specialite" class="alternance" id="alternance">Alternance</a>
                </section>

                <img src="./assets/img/persos-histoire/perso-flowwi-2.png" class="boy-v" alt="">
                <p class="txt tp-f">Nous sommes arrivés au niveau du type de formation, lequel correspondrait à tes objectifs ?</p>
    </div>

    <div class="specialite" id="specialite">
        <a href="#type" class="back"> < Retour en arrière</a> 
            <section class="spe-q">
                <p>Vers quel domaine voudrais-tu t'orienter ?</p>
                </section>

                <section class="domaine">
                    <section>
                        <img src="./assets/img/icones-spe/sciences-icone.png" alt="">
                        <a class="sciences" id="sciences">Sciences</a>
                    </section>
                    <section class="spe-down">
                        <img src="./assets/img/icones-spe/communication-marketing-icone.png" alt="">
                        <a class="com" id="commarketing">Communication <br> & Marketing</a>
                    </section>
                    <section class="">
                        <img src="./assets/img/icones-spe/informatique-icone.png" alt="">
                        <a class="informatique" id="informatique">Informatique</a>
                    </section>
                    <section class="spe-down">
                        <img src="./assets/img/icones-spe/esthetique-icone.png" alt="">
                        <a class="esthetique" id="esthetique">Esthétique</a>
                    </section>
                    <section>
                        <img src="./assets/img/icones-spe/video-son-icone.png" alt="">
                        <a class="video" id="videoson">Vidéo & Son </a>
                    </section>
                </section>

                <img src="./assets/img/persos-histoire/perso-flowwi-4.png" alt="" class="f-bleu">

                <p class="txt dom-f">Nous avons atteint les domaines, cette fois-ci, 4 choix s’offrent à toi, lequel te plaît le plus ?</p>
    </div>


    <?php
    if (isset($_GET['sciencesbac3']) || isset($_GET['sciencesbac5'])):
        include('views/sciences.php');

    elseif (isset($_GET['informatiquebac3']) || isset($_GET['informatiquebac5'])):
        include('views/informatique.php');

    elseif (isset($_GET['commarketingbac3']) || isset($_GET['commarketingbac5'])):
        include('views/communication-marketing.php');
        
    elseif (isset($_GET['esthetiquebac3']) || isset($_GET['esthetiquebac5'])):
        include('views/esthetique.php');

    elseif (isset($_GET['videosonbac3']) || isset($_GET['videosonbac5'])):
        include('views/video.php');

    endif;
    ?>

    </body>

</html>