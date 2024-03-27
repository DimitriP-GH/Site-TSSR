<?php
$identifiant = $_POST['identifiant'];
$motdepasse = $_POST['motdepasse'];

if ($identifiant == 'admin' && $motdepasse == 'motdepasse') {
    echo '<p class="success-message">Connexion réussie !</p>';
} else {
    echo '<p class="error-message">Connexion échouée !</p>';
}
?>
