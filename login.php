<?php
$identifiant = $_POST['identifiant'];
$motdepasse = $_POST['motdepasse'];

if ($identifiant == 'admin' && $motdepasse == 'motdepasse') {
    echo 'Connexion réussie !';
} else {
    echo 'Connexion échouée !';
}
?>
