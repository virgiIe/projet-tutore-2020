<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowwi - Liste</title>
    <link rel="icon" type="image/png" href="../assets/img/flowwi/logo-flowwi.png" />
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/fluide.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/jquery.arctext.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
</head>

<body>


<?php
    include('../lib/connexion_base.php');
?>


    <div class="formation" id="formations">
        <a id="retourSpecialite" class="backformation">
            < Retour à l'accueil</a> <br>
        <h2 class="titreform">
        <?php
            if($_GET["id_FormeDeFormation"] == 1) {
                echo'Masters';
            }
            elseif($_GET["id_FormeDeFormation"] == 2) {
                echo'DSAA';
            }
            elseif($_GET["id_FormeDeFormation"] == 3) {
                echo'DNA';
            }
            elseif($_GET["id_FormeDeFormation"] == 4) {
                echo'Licences Professionnelles';
            }
            elseif($_GET["id_FormeDeFormation"] == 5) {
                echo'Bachelors';
            }
            elseif($_GET["id_FormeDeFormation"] == 5) {
                echo"Cycles d'ingénieurs";
            }
            elseif($_GET["id_FormeDeFormation"] == 5) {
                echo'Mastères';
            }
        ?>
        </h2>

        <div class="liste">
            <ul class="ul-f">
            <?php

                $sql = "SELECT pt_Intitule.id, pt_Intitule.nom FROM pt_Intitule, pt_FormeDeFormation, pt_Specialite, pt_TabIntFormeF, pt_TabIntSpe WHERE pt_TabIntFormeF.id_formeFormation = pt_FormeDeFormation.id AND pt_TabIntFormeF.id_intitule = pt_Intitule.id AND pt_TabIntSpe.id_specialite = pt_Specialite.id AND pt_TabIntSpe.id_intitule = pt_Intitule.id AND pt_FormeDeFormation.id = :id_FormeDeFormation AND pt_Specialite.id = :id_Specialite";

                $test = $_GET['id_typeFormation'];

                $attributes = array(
                    'id_Specialite' => $_GET['id_Specialite'],
                    'id_FormeDeFormation' => $_GET['id_FormeDeFormation'],
                );

                    $req = $link -> prepare($sql);
                    $req -> execute($attributes);

                    while($data = $req -> fetch()){
                        echo '<li class="li-f"><a target="_blank" href="../fiche/?id_intitule='.$data['id'].'&id_typeFormation='.$test.'">'.$data['nom'].'</a></li>';
                    }

                    $req = null;

            ?>
            </ul>
        </div>
    </div>
    </body>

</html>