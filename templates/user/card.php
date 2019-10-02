<div class="card" style="min-width: 200px;">
    <img src="<?php echo $profile['img']; ?>" class="card-img-top" alt="Profile pic">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $profile['prenom']; ?>
        </h5>
        <p class="card-text">
            <?php echo $profile['login']; ?>
        </p>
        <?php
        // On définit la classe du badge pour l'utilisateur
        // sur lequel on est en train d'itérer
        $badgeClass = ($profile['active'] ? "success" : "danger");
        ?>
        <p>
            <?php // On applique cette classe dans les classes CSS 
            ?>
            <span class="badge badge-<?php echo $badgeClass; ?>">
                <?php echo ($profile['active'] ? "Actif" : "Inactif"); ?>
            </span>
        </p>
    </div>
</div>