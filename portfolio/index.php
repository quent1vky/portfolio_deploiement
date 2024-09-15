<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Page de connexion</title>
</head>

<body>



    <form action="php/traitement_connexion.php" method="post" class="login-form">

        <div class="cadre">
            <h1>CONNEXION</h1>

            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" name="prenom" id="p" required>
            </div>

            <div class="form-group">
                <label for="mdp">Mot de passe:</label>
                <input type="password" name="mdp" id="mdp" required>
            </div>

            <input type="submit" class="boutton" value="Envoyer"/>

        </div>

    </form>
    
</body>
</html>
