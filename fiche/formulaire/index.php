<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/form-fiche.css">
    <!-- <link rel="stylesheet" href="../../assets/css/stylevalid.css"> -->
    <title>Formulaire</title>
   
</head>
<body>

    <?php if (isset($_GET['form'])): ?>
        <div class="pageformulaire">
            <img class="lettre" src="../../assets/img/icones-fiche/mail.png" alt="">
            
            <div class="formulaire">
                <a href="index.html"><img class="croix" src=".../assets/img/icones-fiche/croix.png" alt=""></a>
                <h1 class="obtenir">Obtenir la fiche par mail</h1>
    
                <div class="name">
                <label for="Nom">Nom</label><input class="inname" type="text" name="nom" required>
                </div>
    
                <div class="firstname">
                <label for="Prénom">Prénom</label><input class="infirstname" type="text" name="prenom" required>
                </div>
    
                <div class="email">
                <label for="email">Adresse e-mail</label><input class="inemail"type="text" name="email" required>
                </div> 
    
                <div class="env">
                    <div class="btn">Envoyer</div>
                </div>
                
            </div>
    <?php endif; ?>


    <?php if (isset($_GET['?success=true'])): ?>

    <div class="pagefin">
        <img class="lettre2" src="../../assets/img/icones-fiche/mail.png" alt="">
        <div class="blockbleu">
            <h1 class="msg">La fiche a été envoyée à votre adresse mail !</h1>
            <div class="ret">
               <a href="formulaire.html" class="btn2">Retour</a>
            </div>
        </div>
        <footer>
            <h1 class="bullfin">À bientôt !</h1>
            <img class="bonhomme2" src="../../assets/img/persos-histoire/perso-flowwi-5.png" alt="">
        </footer>
    </div>
    <?php endif; ?>


    </div>
</body>
</html>