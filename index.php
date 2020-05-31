<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowwi</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/fluide.css">
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
        <a href="#niveau-bac" class="start">démarrer</a>

        
        
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
                    <a href="#" class="bac3">Bac +3</a>
                    <a href="#" class="bac5">Bac +5</a>
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
                    <a href="#" class="initial">Inital</a>
                    <a href="#" class="alternance">Alternance</a>
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
                        <a href="#" class="sciences">Sciences</a>
                    </section>
                    <section class="spe-down">
                        <img src="./assets/img/icones-spe/communication-marketing-icone.png" alt="">
                        <a href="#" class="com">Communication <br> & Marketing</a>
                    </section>
                    <section class="spe-down">
                        <img src="./assets/img/icones-spe/informatique-icone.png" alt="">
                        <a href="?informatique#diplome" class="informatique">Informatique</a>
                    </section>
                    <section>
                        <img src="./assets/img/icones-spe/esthetique-video-icone.png" alt="">
                        <a href="#" class="esthetique">Esthétique <br> & Vidéo </a>
                    </section>
                </section>

                <img src="./assets/img/persos-histoire/perso-flowwi-4.png" alt="" class="f-bleu">

                <p class="txt dom-f">Nous avons atteint les domaines, cette fois-ci, 4 choix s’offrent à toi, lequel te plaît le plus ?</p>
    </div>


    <?php
    if (isset($_GET['sciences3'])):
        include('views/sciences3.php');
    elseif (isset($_GET['sciences5'])):
        include('views/sicences5.php');

    elseif (isset($_GET['informatique3']) || isset($_GET['informatique5'])):
        include('views/informatique.php');

    elseif (isset($_GET['communication-marketing3'])):
        include('views/communication-marketing3.php');
    elseif (isset($_GET['communication-marketing5'])):
        include('views/communication-marketing5.php');
        
    elseif (isset($_GET['esthetique3'])):
        include('views/esthetique3.php');
    elseif (isset($_GET['esthetique5'])):
        include('views/esthetique5.php');

    elseif (isset($_GET['video3'])):
        include('views/video3.php');
    elseif (isset($_GET['video5'])):
        include('views/video5.php');

    endif;
    ?>

    </body>

</html>