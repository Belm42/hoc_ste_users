<?php
require_once 'src/Db/functions.php';

// --- Récupération des variables de formulaire -------------------------
if (empty($_POST['email']) || empty($_POST['message'])) {
    echo "Les champs fournis ne sont pas valides";
    die;
}

$email = $_POST['email'];
$message = $_POST['message'];

// --- Récupération de l'instance PDO -----------------------------------
try {
    $pdo = getPdoInstance();
} catch (PDOException $e) {
    echo 'Erreur lors de la connexion à la base de données';
    die;
}

$stmt = $pdo->prepare("INSERT INTO contact (email, message) VALUES (:email, :mess)");

$res = $stmt->execute([
    "email" => $email,
    "mess" => $message
]);

echo ($res) ?
    "Votre demande a bien été enregistrée" : "Une erreur est survenue lors de l'enregistrement de votre demande";
