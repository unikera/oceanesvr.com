<!--<div class="container-veille">
<div class="top">
    <section class="laveille">
        <div class="vt">
            <h1 class="titleV">
                Qu'est-ce que la <span>veille technologique</span>?
            </h1>
            <p class="descriptionV">
                La veille technologique consiste à surveiller et analyser les dernières avancées, innovations et tendances dans le domaine technologique. Cela permet à tout un chacun de rester informé et à jour sur les progrès technologiques pertinents à leurs intérêts et domaines d'expertise.
            </p>
        </div>
    </section>
    </div>
    <div class="bottom">
        <section class="certificationsV">
            <div class="columnV">
                <div class="certificationV">
                    <img src="logo_outil1.png" alt="Logo Outil 1">
                    <p>Phrase décrivant l'outil 1 pour la veille technologique.</p>
                </div>
            </div>
            <div class="columnV">
                <div class="certificationV">
                    <img src="logo_outil2.png" alt="Logo Outil 2">
                    <p>Phrase décrivant l'outil 2 pour la veille technologique.</p>
                </div>
            </div>
            <div class="columnV">
                <div class="certificationV">
                    <img src="logo_outil3.png" alt="Logo Outil 3">
                    <p>Phrase décrivant l'outil 3 pour la veille technologique.</p>
                </div>
            </div>
        </section>
    </div>
</div>


<div class="bottomV">
    <div> 
        <img src="/images">
        <p>Phrase décrivant l'outil 1 pour la veille technologique.</p>

    </div>
    <div> </div>
    <div> </div>

</div>
-->
<div class="container-veille">
    <div class="topV">
        <div class="textV">
            <h1 class="questionV">
            Qu'est-ce que la <span>veille technologique</span>?</h1>
            <p class="descriptionV">
                La veille technologique consiste à surveiller et analyser les dernières avancées, innovations et tendances dans le domaine technologique. Cela permet à tout un chacun de rester informé et à jour sur les progrès technologiques pertinents à leurs intérêts et domaines d'expertise.
            </p>
        </div>
    </div>

    <section>
        <div class="bottomV">

            <div class="containerV">
                <div class="block-imgV">
                    <?php
                    $pdo = PdoFolio::getPdoFolio();
                    $lesVeillesTech = $pdo->getLesVeillesTech();

                    foreach ((array) $lesVeillesTech as $laVeilleTech) {
                        echo '<div class="product product-item">';

                        echo '<div class ="product-image">';
                        echo "<th> <img src='" . $laVeilleTech['photo'] . " ' ></th>";
                        echo '</div>';

                        echo '<h2 class="product-title">' . $laVeilleTech['titre'] . '</h2>';
                        echo '<p class="product-description">' . $laVeilleTech['description'] . '</p>';
                        echo '<p class="product-lien">' . $laVeilleTech['lien'] . '</p>';

                        echo '</div>';
                    }

                    ?>
                    </table>
                </div>
            </div>
    </section>
</div>

</div>