<?php require_once 'data/users.php'; ?>
<?php require_once 'templates/header.php'; ?>
<?php require_once 'templates/nav.php'; ?>

<div class="container fluid">
    <div class="row">
        <div class="w-100 d-flex flex-row justify-content-around align-items-center mt-3">
            <?php foreach ($users as $profile) {
                require 'templates/user/card.php';
            } ?>
        </div>
    </div>
</div>
<?php require_once 'templates/footer.php'; ?>