<div class="block-img">
    <?php 
    $pdo = PdoFolio::getPdoFolio();
    $lesRealisations = $pdo->getLesRealisations();

    foreach($lesRealisations as $uneRealisation) {
    ?>
        <section class="realisations">
            <div class="realisation">
                <div class="recto">
                    <img src="<?php echo $uneRealisation['image_url']; ?>" alt="<?php echo $uneRealisation['titre']; ?>" class="realisation-image">
                </div>
                <div class="verso">
                    <h2><?php echo $uneRealisation['titre']; ?></h2>
                    <p><?php echo $uneRealisation['description']; ?></p>
                    <a href="<?php echo $uneRealisation['lien_projet']."&id=".$uneRealisation['id'];?>" class="button">Voir plus</a>
                </div>
            </div>
        </section>
            </form>
    <?php
    }
    ?>

<a href="documents/doc.pdf" class="button pdf-button" target="_blank">Tableau de synthèse</a>

</div>












<!--
<div class="block-img">
    <section class="realisations">
        <a href="" class="realisation">
            <div class="recto">
                <img src="images/myself.jpg" alt="Image Réalisation 1">
            </div>
            <div class="verso">
                <h2>Réalisation 1</h2>
                <p>Introduction à la première réalisation.</p>
                <button>Voir plus</button>
            </div>
        </a>
    </section>
-->








<!--
    <section class="realisations">
        <a href="index.html" class="realisation">
            <div class="recto">
                <img src="images/myself.jpg" alt="Image Réalisation 2">
            </div>
            <div class="verso">
                <h2>Réalisation 2</h2>
                <p>Introduction à la deuxième réalisation.</p>
                <button>Voir plus</button>
            </div>
        </a>
    </section>

    <section class="realisations">
        <a href="index.html" class="realisation">
            <div class="recto">
                <img src="images/myself.jpg" alt="Image Réalisation 3">
            </div>
            <div class="verso">
                <h2>Réalisation 3</h2>
                <p>Introduction à la troisième réalisation.</p>
                <button>Voir plus</button>
            </div>
        </a>
    </section> -->
</div>
