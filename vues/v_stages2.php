<div class="container-stage">
    <h1 style="margin-top: 100px;">Stage de premiere année</h1>

   <div class="top" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">

    <div class="boxoftwo2">
         <div class="left">
            <div class="slider-text">
                <div class="slide">
                        <p>Texte du Slide 1</p>
                    </div>
                    <div class="slide">
                        <p>Texte du Slide 2</p>
                    </div>
                    <div class="slide">
                        <p>Texte du Slide 3</p>
                    </div>
                    <div class="slide">
                    <p>Texte du Slide 4</p>
                </div>
            </div>
            <div class="dots-container1">
            <span class="dot1"></span>
            <span class="dot1"></span>
            <span class="dot1"></span>
            <span class="dot1"></span>

        </div>
    </div>

         
         </div>

            <div class="right" style="margin-right: 100px;">
               <div class="slider-container">
                  <div class="slides">
                     <img src="images/e.png" alt="">
                     <img src="images/l.png" alt="">
                     <img src="images/f.png" alt="">
                     <img src="images/a.png" alt="">
                     <img src="images/b.png" alt="">
                     <img src="images/c.png" alt="">

                  </div>
                  <div class="dots-container">
                     <span class="dot"></span>
                     <span class="dot"></span>
                     <span class="dot"></span>
                     <span class="dot"></span>
                     <span class="dot"></span>
                     <span class="dot"></span>

                  </div>
               </div>
            </div>
         
      </div>












    <!--  <div class="bottom">
         <h1>Stage de deuxième année</h1>
         <div class="boxoftwo2">
         <div class="left">
            <div class="slider-text">
                <div class="slide">
                        <p>Texte du Slide 1</p>
                    </div>
                    <div class="slide">
                        <p>Texte du Slide 2</p>
                    </div>
                    <div class="slide">
                        <p>Texte du Slide 3</p>
                    </div>
                    <div class="slide">
                    <p>Texte du Slide 4</p>
                </div>
            </div>
            <div class="dots-container1">
            <span class="dot1"></span>
            <span class="dot1"></span>
            <span class="dot1"></span>
            <span class="dot1"></span>

        </div>
         </div>

         <div class="right" style="margin-right: 100px;">
               <div class="slider-container">
                  <div class="slides">
                     <img src="images/e.png" alt="">
                     <img src="images/l.png" alt="">
                     <img src="images/f.png" alt="">
                     <img src="images/a.png" alt="">
                     <img src="images/b.png" alt="">
                     <img src="images/c.png" alt="">

                  </div>
                  <div class="dots-container">
                     <span class="dot"></span>
                     <span class="dot"></span>
                     <span class="dot"></span>
                     <span class="dot"></span>
                     <span class="dot"></span>
                     <span class="dot"></span>

                  </div>
               </div>
            </div>
        </div>
   </div> -->

   <div class="bottom">
    <h1>Stage de deuxième année</h1>
    <div class="slider-box">
        <div class="left-box">
            <div class="text-slider">
                <div class="text-slide">
                    <p>Texte du Slide 1</p>
                </div>
                <div class="text-slide">
                    <p>Texte du Slide 2</p>
                </div>
                <div class="text-slide">
                    <p>Texte du Slide 3</p>
                </div>
                <div class="text-slide">
                    <p>Texte du Slide 4</p>
                </div>
            </div>
            <div class="dots-container1">
                <span class="dot1"></span>
                <span class="dot1"></span>
                <span class="dot1"></span>
                <span class="dot1"></span>
            </div>
        </div>

        <div class="right-box" style="margin-right: 100px;">
            <div class="image-slider-container">
                <div class="image-slides">
                    <img src="/images/gg1.png" alt="">
                    <img src="images/gg2.png" alt="">
    
                </div>
                <div class="dots-container">
                    <span class="dot"></span>
                    <span class="dot"></span>

                </div>
            </div>
        </div>
    </div>
</div>




   <script>
      const slides = document.querySelector('.slides');
      const dots = document.querySelectorAll('.dot');
      let currentIndex = 0;

      // Fonction pour afficher une diapositive spécifique
      function showSlide(index) {
         slides.style.transform = `translateX(-${index * 100}%)`;
      }

      // Fonction pour mettre à jour les points
      function updateDots(index) {
         dots.forEach(dot => {
            dot.classList.remove('active');
         });
         dots[index].classList.add('active');
      }

      // Événement de clic sur les points pour changer de diapositive
      dots.forEach((dot, index) => {
         dot.addEventListener('click', () => {
            currentIndex = index;
            showSlide(index);
            updateDots(index);
         });
      });
   </script>

<script>
   
$(document).ready(function() {
    // Sélectionnez le conteneur du slider texte
    var sliderTextContainer = $('.boxoftwo2 .left .slider-text');
    // Sélectionnez toutes les diapositives de texte dans le slider
    var sliderTextSlides = sliderTextContainer.find('.slide');
    // Sélectionnez tous les points de navigation
    var dots = $('.boxoftwo2 .left .dots-container1 .dot1');

    // Initialisez l'index de la diapositive de texte actuelle
    var currentIndexText = 0;

    // Fonction pour afficher la diapositive de texte spécifique
    function showSlideText(index) {
        // Masquez toutes les diapositives de texte
        sliderTextSlides.hide();
        // Affichez la diapositive de texte spécifiée
        sliderTextSlides.eq(index).show();
    }

    // Fonction pour mettre à jour les points de navigation
    function updateDots(index) {
        // Supprimez la classe 'active' de tous les points
        dots.removeClass('active');
        // Ajoutez la classe 'active' au point correspondant à la diapositive actuelle
        dots.eq(index).addClass('active');
    }

    // Événement de clic sur les points de navigation
    dots.click(function() {
        // Récupérez l'index du point cliqué
        var index = $(this).index();
        // Affichez la diapositive de texte correspondant à l'index du point
        showSlideText(index);
        // Mettez à jour les points de navigation
        updateDots(index);
        // Mettez à jour l'index de la diapositive de texte actuelle
        currentIndexText = index;
    });
});

</script>

<!--CODE POUR LE SLIDER IMAGE STAGE 2-->
<script>
$(document).ready(function() {
    // Sélectionnez le conteneur du slider d'images
    var imageSliderContainer = $('.right-box .image-slider-container');
    // Sélectionnez toutes les images dans le slider
    var imageSlides = imageSliderContainer.find('.image-slides img');
    // Sélectionnez tous les points de navigation
    var dots = imageSliderContainer.find('.dots-container .dot');

    // Initialisez l'index de l'image actuelle
    var currentIndex = 0;

    // Fonction pour afficher une image spécifique
    function showImage(index) {
        // Masquez toutes les images
        imageSlides.hide();
        // Affichez l'image spécifiée
        imageSlides.eq(index).show();
    }

    // Fonction pour mettre à jour les points de navigation
    function updateDots(index) {
        // Supprimez la classe 'active' de tous les points
        dots.removeClass('active');
        // Ajoutez la classe 'active' au point correspondant à l'image actuelle
        dots.eq(index).addClass('active');
    }

    // Événement de clic sur les points de navigation
    dots.click(function() {
        // Récupérez l'index du point cliqué
        var index = $(this).index();
        // Affichez l'image correspondant à l'index du point
        showImage(index);
        // Mettez à jour les points de navigation
        updateDots(index);
        // Mettez à jour l'index de l'image actuelle
        currentIndex = index;
    });

    // Affichez la première image au chargement de la page
    showImage(currentIndex);
    // Mettez à jour les points de navigation au chargement de la page
    updateDots(currentIndex);
});
</script>