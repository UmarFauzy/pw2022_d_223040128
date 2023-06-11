<?php 
require '../functions.php';
$product = query("SELECT * FROM product"); 
?>
    <!-- Untuk Header -->
    <?php require('partials/header.php'); ?>

    <!-- Naavbar -->
    <?php require('partials/navbar.ols.php'); ?>
    <!-- Naavbar -->

    <!-- logo -->
    <!-- <div class="logo">
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-facebook"></i></a>
    </div> -->
    <!-- logo -->
    
    <!-- Main Conten -->
    <main>
        <div class="container">
            <h2 class="title"><span>Auntumn</span> Fashion</h2>
            <div class="row">
            <?php foreach ($product as $p) :?>
                    <?php if($p["id_kategori"] == "13" ) : ?>
                <div class="col animate">
                <img src="../img/<?= $p["gambar"] ?>" />
                    <h4 style="text-align: center;"><?= $p["judul_berita"] ?></h4>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
   </main>
    <!-- Main Conten -->
    
    <!-- Footer -->
    <?php require('partials/footer.ols.php'); ?>
    <!-- Footer -->