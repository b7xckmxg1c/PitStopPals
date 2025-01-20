<?php
  include("header.php");
?>

  <main class="main">
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Apie mus</h2>
        <p>Truputis informacijos</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/cargif.gif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Pit Stop Pals</h2>
            <p class="fst-italic py-3">
              Tai inovatyvi platforma, skirta automobilių entuziastams ir keliautojams, sujungianti bendruomenę žmonių, kurie dalijasi aistra kelionėms ir automobiliams. Ši svetainė yra vieta, kur galėsite:
            </p>
            <div class="row">
              <div class="col-lg-8">
                <ul>
                  <li><i class="bi bi-chevron-right"></i>
                    <strong>Bendrauti su kitais keliautojais:</strong> 
                    <span>Susikurkite profilį, dalinkitės savo kelionių įspūdžiais ir susipažinkite su žmonėmis, mėgstančiais keliauti.
                    </span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i>
                    <strong>Atrasti geriausias sustojimo vietas:</strong>
                      <span>Ieškokite ir vertinkite aukščiausiai įvertintas degalines, užkandines, poilsio aikšteles ir kitas vietas, kurios praturtins jūsų kelionę.
                      </span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i>
                    <strong>Parodyti savo automobilį:</strong>
                      <span>Dalinkitės nuotraukomis ir savo transporto priemonės istorijomis mūsų bendruomenės galerijoje.
                      </span>
                  </li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              Nesvarbu, ar esate savaitgalio keliautojas, ar ilgesnių nuotykių ieškotojas, Pit Stop Pals - tai puikus kelionių partneris jūsų kelyje.
            </p>
          </div>
        </div>
      </div>
    </section>
    
    <section id="stats" class="stats section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Statistika</h2>
        <p></p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Narių</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Renginių</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
              <p>Nuotraukų</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="223" data-purecounter-duration="1" class="purecounter"></span>
              <p>Atrastų nuostabių vietovių</p>
            </div>
          </div>

        </div>

      </div>

    </section>
    <section id="testimonials" class="testimonials section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Atsiliepimai</h2>
        <p>Narių atsiliepimai</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/users/user2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Dizainerė</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/users/user3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Programuotoja</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/users/user4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelanceris</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/users/user5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Verslininkas</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>

  </main>

<?php
  include("footer.php");
?>