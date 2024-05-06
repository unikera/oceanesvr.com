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

            </div>
            <?php

            }
        ?>
        </div>
        <div class="right">
        <embed src="documents\Diapo tuto serveur ftp.pdf" type="application/pdf" width="100%" height="400px" />
        </div>
    </div>

</div>

<p></p>


