<?php
$pdo = PdoFolio::getPdoFolio();
$id = $_REQUEST['id'];
$descripLongues = $pdo->getTexteLesRealisations($id);

?>




<div class="container-cvenligne">
    <div class="boxoftwo">
        <div class="left">
        <?php
            foreach($descripLongues as $descripLongue){

            ?>

            <div class="textR">
            <p><?php echo $descripLongue['descripLongue'] ?></p>
            <a href="https://github.com/Oceanesvr/ssWashAuto" class="buttonGithub" target="_blank">lien GitHub</a>

            </div>
            <?php

            }
        ?>
        </div>
        <div class="right">
        <img src="images/ssw0.png" alt="">
            <img src="images/ssw1.png" alt="">
            <img src="images/ssw2.png" alt="">

        </div>
    </div>

</div>

<script>
$(document).ready(function() {
    // Sélectionnez le conteneur du slider
    var sliderContainer = $('.container-cvenligne .right');
    // Sélectionnez toutes les images dans le slider
    var sliderImages = sliderContainer.find('img');

    // Initialisez l'index de l'image actuelle
    var currentIndex = 0;

    // Créez une fonction pour changer l'image toutes les 4 secondes
    setInterval(function() {
        // Masquez toutes les images
        sliderImages.hide();
        // Affichez l'image actuelle
        sliderImages.eq(currentIndex).show();
        // Incrémentez l'index de l'image
        currentIndex++;
        // Si l'index dépasse le nombre total d'images, revenez à la première image
        if (currentIndex >= sliderImages.length) {
            currentIndex = 0;
        }
    }, 4000); // 4 secondes
});

</script>