<?php
// contact_process.php est la cible du formulaire qui se trouve dans contact.php
// C'est donc le fichier qui va se charger du traitement des données de formulaire

$tab = ["test", "test 2"];

foreach ($tab as $index => $value) {
    echo $index . " - " . $value . "<br />";
}

// Dans le cadre d'un formulaire avec la méthode POST, PHP va remplir automatiquement le tableau associatif $_POST
// Dans ce tableau, chaque clé correspondra à l'attribut "name" d'un champ de formulaire et chaque valeur associée sera la valeur renseignée par l'utilisateur dans le formulaire
var_dump($_POST);

// Cete boucle foreach permet d'afficher les noms des champs de formulaire et leur valeur
// La syntaxe de décomposition en clé => valeur nous permet d'afficher tous les champs, quels qu'ils soient
foreach($_POST as $formField => $val) { ?>
    <p>
        <?php echo $formField; ?> : <?php echo $val; ?>
    </p>
<?php } ?>