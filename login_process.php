<?php
require_once 'src/Db/functions.php';

try {
    $pdo = getPdoInstance();
} catch (PDOException $e) {
    echo 'Erreur lors de la connexion à la base de données';
    die;
}

$email = $_POST['email'];
$password = $_POST['password'];

// Requête non préparée : non sécurisée
// Car vulnérable aux injections SQL
// Dans le champ de mot de passe, renseigner :
// ' OR 1=1 #
// et l'authentification passera
// $res = $pdo->query("SELECT * FROM utilisateur WHERE email='$email' AND pass='$password'");

// Requête préparée : on passe par la méthode "prepare" pour préparer la requête avec des paramètres
$stmt = $pdo->prepare(
    "SELECT * FROM utilisateur WHERE email=:email AND pass=:pass"
);
// Exécution de la requête préparée : on fournit les valeurs des paramètres au moment de l'exécution
$res = $stmt->execute([
    'email' => $email,
    'pass' => $password
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

// echo ($user) ? "L'authentification a réussi" : "L'authentification a échoué";

if (!$user) {
    echo "L'authentification a échoué";
} else {
    echo "L'authentification a réussi !";
}
