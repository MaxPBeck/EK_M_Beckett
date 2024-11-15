<?php require_once('./assets/layout/header2.php'); ?> 

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

      <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="container position-relative">

          <div class="carousel-item active">
            <div class="carousel-container">
              <h2>Willkommen auf meiner persönlichen Website!</h2>
            </div>
          </div><!-- End Carousel Item -->

          

        </div>

      </div>

    </section><!-- /Hero Section -->

    

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/wp.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3></h3>
            <p class="fst-italic">
             <h4>Kurs: Web Programmierung mit Ali Khorsandfard</h4>
             <br>
             <h4>DAA Fisi Winter 2024</h4>
             <br>
             <h4>Name: Max Beckett</h4>
             <br>
             <h4>Ort: Detmold<h/4>
            </p>
          </div>
        </div>

      </div>
      <!-- Page Title -->
        <br>
        <br>
               
        <nav class="breadcrumbs">
          
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Ohmstraße 6A, 32756, Detmold</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>05231 3038610</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>maxbeckettdaa@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Kontaktiere mich!</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

      <div class="mt-5" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2458.636774503218!2d8.844000099999999!3d51.9588148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ba43939f84fb5b%3A0x7a3821e021446c3c!2sDAA%20German%20employees%20academy%20GmbH!5e0!3m2!1sen!2sde!4v1731582533316!5m2!1sen!2sde" width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframej" frameborder="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

    </section><!-- /Contact Section -->

    </section><!-- /About Section -->

    

    <?php require_once('./assets/layout/footer.php'); ?> 