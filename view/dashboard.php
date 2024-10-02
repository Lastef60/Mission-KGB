<?php

session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

echo "Bienvenue sur le tableau de bord !";
?>

<a href="../controllers/AuthController.php?action=logout">Se déconnecter</a>
