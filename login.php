<?php
$identifiant = $_POST['identifiant'];
$Motdepasse = $_POST['motdepasse'];

if ($identifiant == 'admin' && $Motdepasse == 'password') {
    echo 'Connexion réussie !';
} else {
    echo 'Connexion échouée !';
}
?>
