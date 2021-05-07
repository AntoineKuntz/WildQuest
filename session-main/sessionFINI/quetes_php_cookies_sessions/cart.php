<?php session_start();

if (empty($_SESSION)) {
    header('Location: index.php');
}

?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    <?php foreach ($_SESSION['cart'] as $carts) {
            echo 'L\'article numéro ' . $carts .  ' a bien était ajouter a votre panier.'.'<br> ';
        } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
