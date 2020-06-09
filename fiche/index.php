<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowwi - Fiche</title>
    <link rel="icon" type="image/png" href="../assets/img/flowwi/icon-flowwi.png" />
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/fluide.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js'></script>
    <script src='https://superal.github.io/canvas2image/canvas2image.js'></script>
    <script type="text/javascript" src="../assets/js/fiche.js"></script>
</head>

<body>
    
<?php
    include('../lib/connexion_base.php');
?>

<?php
    $sql = "SELECT pt_Specialite.nom AS nom_specialite, pt_Intitule.nom AS nom_intitule, pt_Intitule.matiere_1, pt_Intitule.matiere_2, pt_Intitule.matiere_3, pt_Intitule.matiere_4, pt_Intitule.matiere_5, pt_Intitule.debouche_1, pt_Intitule.debouche_2, pt_Intitule.debouche_3 FROM pt_Intitule, pt_Specialite, pt_TabIntSpe WHERE pt_TabIntSpe.id_intitule = pt_Intitule.id AND pt_TabIntSpe.id_specialite = pt_Specialite.id AND pt_Intitule.id = :id_intitule";


    $attributes = array(
        'id_intitule' => $_GET['id_intitule'],
    );

    $req = $link -> prepare($sql);
    $req -> execute($attributes);

    while($data = $req -> fetch()){ ?> 
        
        
    <div class="resultat" id="resultat-fiche">
    <a href="../" class="backresultat">   
        <img src="../assets/img/flowwi/logo-flowwi.png" alt="logo" class="logo">
        <img src="../assets/img/flowwi/flowwi.png" alt="flowwi" class="flowwi">
    </a>
    <button type="button" id="telechargement" class="btn-screen">Faire une capture d'écran !</button>
        <?php echo'<h1 class="titreresultat">'.$data['nom_intitule'].'</h1>' ?>
                <div class="contenu">
                    <h2 class="laformation">La formation</h2>
                    <div class="noflex">
                        <div class="blockblanc">
                            <div class="type-r">
                                <p class="type1"> Type de formation : <span class="d-bleu">
                                    <?php
                                        if($_GET["id_typeFormation"] == 2) {
                                            echo 'Alternance';
                                        } 
                                        if($_GET["id_typeFormation"] == 3) {
                                            echo 'Initiale';
                                        }
                                    ?>
                                </span></p>
                                <!-- <p class="type2"> Initial ou alternance</p> -->
                            </div>
                            <div class="specialite-r">
                                <p class="specialite1">Spécialité : <?php echo'<span class="d-bleu">'.$data['nom_specialite'].'</span>'?></p>
                                <!-- <p class="specialite2">Informatique</p> -->
                            </div>
                            <p class="matieres">Les matières principales :</p>
                            <ul class="listematieres">
                                <div class="colonne1">
                                    <?php echo'<li>'.$data['matiere_1'].'</li>'?>
                                    <?php echo'<li>'.$data['matiere_2'].'</li>'?>
                                    <?php echo'<li>'.$data['matiere_3'].'</li>'?>
                                </div>
                                <div class="colonne2">
                                    <?php echo'<li>'.$data['matiere_4'].'</li>'?>
                                    <?php echo'<li>'.$data['matiere_5'].'</li>'?>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="jaune">
                        <p class="and">Et après ?</p>
                        <div class="blockjaune">
                            <p class="metier">Insertion professionnelle :</p>
                            <ul class="debouche">
                                <?php echo'<li>'.$data['debouche_1'].'</li>'?>
                                <?php echo'<li>'.$data['debouche_2'].'</li>'?>
                                <?php echo'<li>'.$data['debouche_3'].'</li>'?>
                            </ul>
                        </div>
                    </div>
                </div>
                <footer class="bas">
                    <div class="localisation">
                        <img class="loc" src="../assets/img/icones-fiche/lieu.png" alt="lieu">
                        <p>Lieux : </p>
                        <form action="">

<?php  }


    $req = null;


?>

<select class="lieu" id="lieu"><?php
    $sql2="SELECT pt_TypeDeFormation.id AS id_Type, pt_Intitule.id AS id_Intitule, pt_Etablissement.*, pt_Diplome.url_formation FROM pt_Etablissement, pt_Diplome, pt_TabDipIntitule, pt_TabEtabDiplome, pt_TypeDeFormation, pt_Intitule WHERE pt_TabDipIntitule.id_intitule=pt_Intitule.id AND pt_TabDipIntitule.id_diplome=pt_Diplome.id AND pt_TabEtabDiplome.id_diplome=pt_Diplome.id AND pt_TabEtabDiplome.id_etablissement=pt_Etablissement.id AND pt_Diplome.id_typeFormation=pt_TypeDeFormation.id AND pt_Intitule.id=:id_intitule AND ( pt_Diplome.id_typeFormation=:id_typeFormation OR pt_Diplome.id_typeFormation=1) ORDER BY ville ASC";
    
    $attributes2=array(
        'id_intitule'=> $_GET['id_intitule'],
        'id_typeFormation'=> $_GET['id_typeFormation'],
    );
    
    $req2=$link -> prepare($sql2);
    $req2 -> execute($attributes2);
    
    while($data2=$req2 -> fetch()){
        echo '<option id="choixEcole" value="'.$data2['url_formation'].'">'.$data2['nom'].', '.$data2['code_postal'].' '.$data2['ville'].'</option>';
    }$req2=null;
    
?></select>

                            <button class="btn-site" id="accessSite" type="button">Accéder au site</button>


                        </form>
                    </div>
                </footer>

    </div>
        
        
        
        
        





</body>

</html>