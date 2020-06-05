<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowwi - Formulaire</title>
    <link rel="stylesheet" href="../assets/css/form-contact.css">
</head>
<body>
    <div class="pageformulaire">
        <form action="../controllers/contact_form.php" method="POST" class="formulaire">
            <!-- <img class="lettre" src="../assets/img/icones-fiche/mail.png" alt=""> -->
            <a href="../a-propos/"><img class="croix" src="../assets/img/icones-fiche/croix.png" alt=""></a>
            <h1 class="obtenir">Formulaire de contact</h1>

            <div class="name">
            <label for="Nom">Nom</label><input class="inname" type="text" name="nom" required>
            </div>

            <div class="firstname">
            <label for="Prénom">Prénom</label><input class="infirstname"type="text" name="prenom" required>
            </div>

            <div class="email">
            <label for="email">Adresse e-mail</label><input class="inemail"type="text" name="email" required>
            </div> 
            
            <div class="msg">
                <label for="Message">Message</label><textarea  rows="5" cols="40" class="inmsg" type="text" name="message"></textarea>
            </div>

            <div class="env">
                <button class="btn">Envoyer</button>
            </div>

            <!-- Message de success -->
            <?php if (isset($_GET['success'])): ?>
            <div class="" role="alert">
                Message bien envoyé!
            </div>
            <?php endif; ?>
            
        </form>
    </div>
</body>
</html>