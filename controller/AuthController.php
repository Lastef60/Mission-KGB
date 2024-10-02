<?php 
session_start();
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données
    $conn = connectPostgres();

    // Requête pour vérifier si l'utilisateur existe
    $query = "SELECT * FROM administrateurs WHERE email = $1";
    $result = pg_query_params($conn, $query, array($email));

    if ($result && pg_num_rows($result) === 1) {
        $admin = pg_fetch_assoc($result);

        // Vérification du mot de passe
        if (password_verify($password, $admin['mot_de_passe'])) {
            // Authentification réussie, démarrer la session
            $_SESSION['admin_id'] = $admin['id'];
            header('Location: ../views/dashboard.php');
            exit();
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Aucun administrateur trouvé avec cet email.";
    }

    pg_close($conn);
} else {
    echo "Méthode non autorisée.";
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header('Location: ../views/login.php');
    exit();
}
