<?php
require_once 'src/Db/functions.php';

try {
    $pdo = getPdoInstance();
} catch (PDOException $e) {
    echo 'Erreur lors de la connexion à la base de données';
    die;
}

$res = $pdo->query('SELECT * FROM utilisateur');

// PDOStatement::fetch va lire le prochain résultat de l'ensemble retourné par la base de données
// En paramètre, on peut lui transmettre le type de donnée qu'on attend
// Ici, PDO::FETCH_ASSOC indique à PDO qu'on veut un tableau associatif indexé sur les colonnes
// Donc pour chaque enregistrement, on aura un tableau associatif avec pour clés les colonnes, et pour valeurs les valeurs de chaque enregistrement
// A la fin, après le dernier enregistrement, PDOStatement::fetch va retourner FALSE
// Donc dans l'expression à évaluer à chaque itération de la boucle while, on va affecter automatiquement à $user le prochain enregistrement (en commençant par le premier)
// Et dès qu'on aura passé le dernier utilisateur, $user prendra la valeur FALSE, ce qui interrompra la boucle while
while ($user = $res->fetch(PDO::FETCH_ASSOC)) {
    var_dump($user);
}
