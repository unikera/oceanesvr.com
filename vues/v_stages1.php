<div class="container-stage">

   <div class="top">
      <h1>Stage de premiere année</h1>

      <div class="boxoftwo2">
         <div class="left">
            <div id="slider">
               <input type="radio" name="slider" id="slide1" checked>
               <input type="radio" name="slider" id="slide2">
               <input type="radio" name="slider" id="slide3">
               <input type="radio" name="slider" id="slide4">
               <div id="slides">
                  <div id="overflow">
                     <div class="inner">
                        <div class="slide slide_1" >
                           <div class="slide-content" >
                              <h2>ezgrzgregregregrggggggggggggggggggggggggggggggggggefmezofez,ofpeozpfdcvzfezfzezfezfezezfez</h2>
                              <p>J'ai effectué mon stage de première année au sein de l'entreprise GIDM </p>
                           </div>
                        </div>
                        <div class="slide slide_2">
                           <div class="slide-content">
                              <p>Content for Slide 2</p>
                           </div>
                        </div>
                        <div class="slide slide_3">
                           <div class="slide-content">
                              <p>Content for Slide 3</p>
                           </div>
                        </div>
                        <div class="slide slide_4">
                           <div class="slide-content">
                              <p>Content for Slide 4</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="controls">
                  <label for="slide1"></label>
                  <label for="slide2"></label>
                  <label for="slide3"></label>
                  <label for="slide4"></label>
               </div>
               <div id="bullets">
                  <label for="slide1"></label>
                  <label for="slide2"></label>
                  <label for="slide3"></label>
                  <label for="slide4"></label>
               </div>
            </div>


            <div class="right">
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
         <h1>Stage de deuxième année</h1>
         <p> </p>
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

// Récupérer tous les slides
const slides1 = document.querySelectorAll('.slide');
// Définir l'index actuel du slide
let currenttIndex = 0;

// Fonction pour afficher un slide spécifique
function showSlide(index) {
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.style.display = 'block';
        } else {
            slide.style.display = 'none';
        }
    });
}

// Fonction pour passer au slide suivant
function nextSlide() {
    currentIndex++;
    if (currentIndex === slides.length) {
        currentIndex = 0;
    }
    showSlide(currentIndex);
}

// Appel de la fonction nextSlide toutes les 3 secondes (par exemple)
setInterval(nextSlide, 3000);
</script>

/*
#slider {
    margin-left: 100px;
    width:  400px;
    max-width: 100%;
    text-align: center;
 }*/

 /* Votre CSS modifié 
#slider {
   margin: 0 auto; 
   width: 400px; 
   max-width: 100%;  
   margin-right: 100px;
   text-align: center;
}*/
/*
 #slider input[type=radio] {
    display: none;
 }
 #slider label {
    cursor:pointer;
    text-decoration: none;
 }
 #slides {
    padding: 10px;
    background: #fff;
    position: relative;
    z-index: 1;
 }
 #overflow {
    width: 100%;
    overflow: hidden;
 }
 #slide1:checked ~ #slides .inner {
    margin-left: 0;
 }
 #slide2:checked ~ #slides .inner {
    margin-left: -100%;
 }
 #slide3:checked ~ #slides .inner {
    margin-left: -200%;
 }
 #slide4:checked ~ #slides .inner {
    margin-left: -300%;
 }
 #slides .inner {
    transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    width: 400%;
    line-height: 0;
    height: 300px;
    
 }
 #slides .slide {
    width: 25%;
    float:left;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 500px;
    color: #cc5050;
 }

 
 #slides .slide_1 {
    background: #fff;
 }
 #slides .slide_2 {
    background: #fff;
 }
 #slides .slide_3 {
    background: #fff;
 }
 #slides .slide_4 {
    background: #fff;
 }
 #controls {
    margin: -180px 0 0 0;
    width: 100%;
    height: 50px;
    z-index: 3;
    position: relative;
 }
 #controls label {
    transition: opacity 0.2s ease-out;
    display: none;
    width: 50px;
    height: 50px;
    opacity: .4;
 }
 #controls label:hover {
    opacity: 1;
 }
 #slide1:checked ~ #controls label:nth-child(2),
 #slide2:checked ~ #controls label:nth-child(3),
 #slide3:checked ~ #controls label:nth-child(4),
 #slide4:checked ~ #controls label:nth-child(1) {
    background: url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
    float:right;
    margin: 0 -50px 0 0;
    display: block;
 }
 #slide1:checked ~ #controls label:nth-last-child(2),
 #slide2:checked ~ #controls label:nth-last-child(3),
 #slide3:checked ~ #controls label:nth-last-child(4),
 #slide4:checked ~ #controls label:nth-last-child(1) {
    background: url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
    float:left;
    margin: 0 0 0 -50px;
    display: block;
 }
 #bullets {
    margin: 150px 0 0;
    text-align: center;
 }
 #bullets label {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius:100%;
    background: #ccc;
    margin: 0 10px;
 }
 #slide1:checked ~ #bullets label:nth-child(1),
 #slide2:checked ~ #bullets label:nth-child(2),
 #slide3:checked ~ #bullets label:nth-child(3),
 #slide4:checked ~ #bullets label:nth-child(4) {
    background: #444;
 }
 @media screen and (max-width: 900px) {
    #slide1:checked ~ #controls label:nth-child(2),
    #slide2:checked ~ #controls label:nth-child(3),
    #slide3:checked ~ #controls label:nth-child(4),
    #slide4:checked ~ #controls label:nth-child(1),
    #slide1:checked ~ #controls label:nth-last-child(2),
    #slide2:checked ~ #controls label:nth-last-child(3),
    #slide3:checked ~ #controls label:nth-last-child(4),
    #slide4:checked ~ #controls label:nth-last-child(1) {
       margin: 0;
    }
    #slides {
       max-width: calc(100% - 140px);
       margin: 0 auto;
    }
 }*/


 /*image
 .top .right {
    width: 700px;
    height: 400px;
    overflow: hidden;
}

 .top .right img {
    width: 100%;
    height: 100%;
    display: block;
    transition: transform 0.5s ease-in-out;
}
*/