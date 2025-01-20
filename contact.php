<?php
  include("header.php");
?>
  <main class="main">
    <section id="contact" class="contact section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Kontaktai</h2>
        <p>Turite pasiūlymų ? Susisiekite !</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-5">
            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Adresas</h3>
                  <p>/* adresas */</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Paskambinkite</h3>
                  <p>/* numeris */</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Mūsų el. paštas</h3>
                  <p>example@gmail.com</p>
                </div>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588460.032020504!2d24.91235115467072!3d54.820879005700434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dda20290a4821f%3A0x300d18c70e9d8b0!2sVilniaus%20apskr.!5e0!3m2!1slt!2slt!4v1736713128767!5m2!1slt!2slt" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Jūsų vardas</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Jūsų el. paštas</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Tema</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Žinutė</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Prašome palaukti..</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Jūsų žinutė buvo išsiūsta mums. Ačiū !</div>

                  <button type="submit">Siūsti !</button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php
  include("footer.php");
?>