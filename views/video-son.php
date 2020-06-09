<div class="diplome-background background-video" id="diplome">
        <a href="#specialite" class="diplome-retour"> < Retour en arrière</a>
        <div class="diplome-flex">
                <b class="diplome-bulle video-1">Quel diplôme cherches-tu à obtenir ?</b>
                <h2 class="diplome-titre">Vidéo & Son</h2>
        </div>

        <?php if ($_GET['niveau'] == 3): ?>
            <h3 class="bac-niveau diplome-video">BAC +3</h3>
            <div class="suite">
                <a href="./liste/?id_Specialite=5&id_FormeDeFormation=5" class="btn-diplome video-1">Bachelors privés</a>
            </div>
        <?php endif; ?>


        <?php if ($_GET['niveau'] == 5): ?>
                <h3 class="bac-niveau diplome-video">BAC +5</h3>
            <div class="suite">
                <a href="./liste/?id_Specialite=5&id_FormeDeFormation=1" class="btn-diplome video-1">Masters universitaire</a>
            </div>
        <?php endif; ?>
        
        
            <p class="txt bulltxt">Aller c’est bientôt fini ! <br> À présent tu dois indiquer le diplôme que tu souhaites obtenir.</p>
            <img class="bonhomme" src="./assets/img/persos-histoire/perso-flowwi-1.png" alt="">
        
    </div>