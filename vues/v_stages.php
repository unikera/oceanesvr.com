<div class="container-stage">
    <div class="top">
        <div class="boxoftwo2">
            <div class="left">
                <div class="textR1">
                    <p>J'ai eu l'opportunité passionnante de mettre en pratique mes compétences en développement web lors de mon stage de première année chez GIDM. Mon principal objectif était de moderniser le site de l'entreprise en utilisant WordPress. Les étapes clés de mon travail comprenaient la définition des objectifs du site, la sélection et la personnalisation du design, le choix de la plateforme, la configuration des pages, la définition du contenu, les tests approfondis et enfin, la mise en ligne du site via le serveur FTP. Ce stage m'a permis d'acquérir une expérience précieuse dans la création et la gestion de sites web professionnels.</p>
                    <a href="documents/attestation1.pdf" class="buttonAttestation1" target="_blank">Attestation de stage</a>

                </div>
            </div>
            <div class="right"  style="margin-right: 100px;">
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
    </div>



    <div class="bottom">
        <div class="boxoftwo2">
            <div class="left">
                <div class="textR2">
                    <p>Durant mon stage de deuxième année chez Concept X Formation, j'ai été chargé de créer l'application web PULSE POINT destinée aux formateurs du centre. Ce projet stimulant m'a amené à travers plusieurs étapes cruciales : la conception du prototype initial, la planification technique détaillée de l'application, la création de maquettes graphiques pour une expérience utilisateur optimale, et enfin, le développement du code de l'application web. Cette application a été codée en JavaScript avec le framework Node.js, une technologie que j'ai eu l'opportunité de découvrir et de maîtriser au cours de mon stage.</p>
                    <a href="documents/attestation2.pdf" class="buttonAttestation" target="_blank">Attestation de stage</a>

                </div>
            </div>
            <div class="right"  style="margin-right: 100px;">
            <div class="slider-container2">
                  <div class="slides2">
                     <img src="images/y.png" alt="">
                     <img src="images/z.png" alt="">
                     <img src="images/u.png" alt="">
                     <img src="images/w.png" alt="">
                     <img src="images/x.png" alt="">

                  </div>
                  <div class="dots-container2">
                     <span class="dot2"></span>
                     <span class="dot2"></span>
                     <span class="dot2"></span>
                     <span class="dot2"></span>
                     <span class="dot2"></span>

                  </div>
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
document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelector('.slides2');
    const dots = document.querySelectorAll('.dot2');
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
});
</script>