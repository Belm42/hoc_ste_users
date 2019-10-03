<?php
require_once 'src/Db/functions.php';

$email = $_POST['email'];
$message = $_POST['message'];

$pdo = getPdoInstance();

$stmt = $pdo->prepare("INSERT INTO contact (email, message) VALUES (:email, :mess)");

$res = $stmt->execute([
    "email" => $email,
    "mess" => $message
]);

echo ($res) ?
    "Votre demande a bien été enregistrée" : "Une erreur est survenue lors de l'enregistrement de votre demande";
