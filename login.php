<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="login.css"> 
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
            <input type="text" id="identifiant" name="identifiant" required>
    </div>
    <div class="input-group">
            <label for="Mot de passe">Mot de passe:</label>
            <input type="password" id="motdepasse" name="motdepasse" required>
    </div>
    <button type="submit">Se connecter</button>
</form>

</body>
</html>
