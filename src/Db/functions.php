<?php
// On utilise un chemin absolu
// Car ce fichier functions.php peut être inclus dans n'importe quel autre fichier exécuté dans le navigateur
// Avec un chemin relatif, la résolution du chemin se ferait sur le fichier qui s'exécute et non le fichier qui est inclus
// Donc l'inclusion qui se trouve là ne fonctionnerait pas
require_once __DIR__ . '/../../config/db.php';

/**
 * Creates and returns a new PDO instance based on the given parameters
 *
 * @param string $dsn
 * @param string $user
 * @param string $pass
 * @return PDO
 * @throws PDOException thrown if connection failed
 */
function getPdoInstance(
    string $dsn = DSN,
    string $user = USER,
    string $pass = PASS
): PDO {
    try {
        $pdo = new PDO($dsn, $user, $pass);
    } catch(PDOException $e) {
        throw $e;
    }

    return $pdo;
}
