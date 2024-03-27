<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="ifelse.css"> 
</head>
<body>

<?php
$identifiant = $_POST['identifiant'] ?? '';
$motdepasse = $_POST['motdepasse'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($identifiant == 'admin' && $motdepasse == 'motdepasse') {
        echo '<p class="success-message">Connexion réussie !</p>';
    } else {
        echo '<p class="error-message">Connexion échouée !</p>';
    }
}
?>

<form action="login.php" method="post">
    <h2>Se connecter</h2>
    <div class="input-group">
            <label for="Identifiant">Identifiant: </label>
            <input type="text" id="Identifiant" name="Identifiant" required>
    </div>
    <div class="input-group">
            <label for="Mot de passe">Mot de passe:</label>
            <input type="Mot de passe" id="Mot de passe" name="Mot de passe" required>
    </div>
    <button type="submit">Se connecter</button>
</form>

</body>
</html>
