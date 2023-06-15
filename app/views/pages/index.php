<?php

// var credentials = 'den-admin';
// require_once '../app/require.php';
include('../app/views/includes/header.php');
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bienvenue chez <span>DenModa</span></h2>
          <p class="animate__animated animate__fadeInUp">N’hésitez pas à nous contacter et à laisser une commande. Nous sommes là pour satisfaire vos besoins</p>
          <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Nous offrons des qualités et des services</h2>
          <p class="animate__animated animate__fadeInUp">N’importe où et n’importe quand nous livrons votre produit.</p>
          <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Laissez-nous vous faire briller aujourd’hui</h2>
          <p class="animate__animated animate__fadeInUp">Devenez élégant, confortable et libre de marcher aussi loin que vous le souhaitez avec des sandales, pas lourd mais de bonne qualité.</p>
          <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class=" bi bi-bag-dash"></i></div>
              <h4 class="title"><a href="">Commander</a></h4>
              <p class="description">Envie de briller, d’être élégant ? Réservez votre commande, nous réaliserons votre rêve.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-alarm"></i></div>
              <h4 class="title"><a href="">Livraison à temps</a></h4>
              <p class="description">Nous nous soucions du respect du temps. Le délai donné est respecté.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-message"></i></div>
              <h4 class="title"><a href="">Commenter</a></h4>
              <p class="description"> Pour tout problème, envoyez-nous un message de commentaires, vous recevrez une réponse de notre part au si tôt que possible</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-happy"></i></div>
              <h4 class="title"><a href="">Satisfaction</a></h4>
              <p class="description">Nous nous soucions de la satisfaction de nos clients. Chez DenModa, vous êtes le roi.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Qui sommes-nous</h2>
          <p>DenModa est  une industrie locale de chaussures faites à la main.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Nous avons trois types de chaussures fabriquées chez nous.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Sandale femme cousue à la main avec fil</li>
              <li><i class="ri-check-double-line"></i> Sandale homme en cuir</li>
              <li><i class="ri-check-double-line"></i> Et tout type de modèle proposé par un client. Pour dire que vous pouvez concevoir n’importe quel modèle de sandale que vous voulez et nous le produirons pour vous.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Nous offrons du bien et du service. Nous nous soucions de la satisfaction de nos clients. Une fois que vous achetez avec nous, vous ne serais jamais decu avec nous.
            </br>Laissez-nous vous servir comme vous le méritez.
            </p>
            <!-- <a href="#" class="btn-learn-more">Know More</a> -->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Clients Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch position-relative video-box" style='background-image: url("assets/img/why-us.jpg");' data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3>Learn from us <strong>How we work</strong></h3>
              <p>
                Want more details on our way of working? visit us
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Find us In The Democratic Republic of Congo
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> North Kivu Province. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>Goma City/ Kyeshero street. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                </li>

              </ul>
            </div>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Avec DenModa vous beneficiez de nos services de qualites </p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <i class="bi bi-house"></i>
              <h4><a href="#">Livraison a domicile</a></h4>
              <p>Chez DenModa, vous commandez un produit et il vous sera livrer n'importe Où vous êtes</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="bi bi-book"></i>
              <h4><a href="#">Formation de fabrication de sandales</a></h4>
              <p>Pour aider les jeunes qui sont intéressés, nous offrons un programme de formation des arts</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Suivie de nos produits</a></h4>
              <p>Nous faisons la suivie de nos produits, toute fois vous pouvez nous contacter en cas d'une question ou d'un commentaire</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-clock"></i>
              <h4><a href="#">Respect de temps</a></h4>
              <p>Nous donnons un delai de 14 jours après avoir commander; le produit est livré dans le delai.
                Passer votre commande à n'importe quel moment, n'importe quel jour car chez nous on travaille 7j/7 et 24h/24</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Products Section ======= -->
    <section id="portfolio" class="portfoio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Produits</h2>
          <p>Nos produits sont des chaussures locales faites à la main. Nous créons et fabriquons nous-mêmes les produits fini</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-app">Homme</li>
              <li data-filter=".filter-card">Femme</li>
              <li data-filter=".filter-web">Enfant</li>
              <li data-filter=".filter-web">Nouveau</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?= URLROOT ?>/public/img/products/product-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Homme 1</h4>
              <p>Homme</p>
              <a href="<?= URLROOT ?>/public/img/products/product-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="More"><i class="bx bx-plus"></i></a>
              <a href="https://wa.me/message/XUMZZEEMPSEFB1" class="details-link" title="Commander"><i class="bi bi-bag-dash"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?= URLROOT ?>/public/img/products/product-2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Plus</h4>
              <p>Enfant</p>
              <a href="<?= URLROOT ?>/public/img/products/product-2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="More"><i class="bx bx-plus"></i></a>
              <a href="https://wa.me/message/XUMZZEEMPSEFB1" class="details-link" title="Commander"><i class="bi bi-bag-dash"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?= URLROOT ?>/public/img/products/product-3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Plus</h4>
              <p>Homme</p>
              <a href="<?= URLROOT ?>/public/img/products/product-3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="More"><i class="bx bx-plus"></i></a>
              <a href="https://wa.me/message/XUMZZEEMPSEFB1" class="details-link" title="Commander"><i class="bi bi-bag-dash"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?= URLROOT ?>/public/img/products/product-4.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Plus</h4>
              <p>Femme</p>
              <a href="<?= URLROOT ?>/public/img/products/product-4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="More"><i class="bx bx-plus"></i></a>
              <a href="https://wa.me/message/XUMZZEEMPSEFB1" class="details-link" title="Commander"><i class="bi bi-bag-dash"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="public/img/products/product-5.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Plus</h4>
              <p>Enfant</p>
              <a href="<?= URLROOT ?>/public/img/products/product-5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="More"><i class="bx bx-plus"></i></a>
              <a href="https://wa.me/message/XUMZZEEMPSEFB1" class="details-link" title="Commander"><i class="bi bi-bag-dash"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?= URLROOT ?>/public/img/products/product-6.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Plus</h4>
              <p>Homme</p>
              <a href="<?= URLROOT ?>/public/img/products/product-6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="More"><i class="bx bx-plus"></i></a>
              <a href="https://wa.me/message/XUMZZEEMPSEFB1" class="details-link" title="Commander"><i class="bi bi-bag-dash"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?= URLROOT ?>/public/img/products/product-7.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Plus</h4>
              <p>Femme</p>
              <a href="<?= URLROOT ?>/public/img/products/product-7.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="More"><i class="bx bx-plus"></i></a>
              <a href="https://wa.me/message/XUMZZEEMPSEFB1" class="details-link" title="Commander"><i class="bi bi-bag-dash"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?= URLROOT ?>/public/img/products/product-8.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Plus</h4>
              <p>Femme</p>
              <a href="<?= URLROOT ?>/public/img/products/product-8.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="More"><i class="bx bx-plus"></i></a>
              <a href="https://wa.me/message/XUMZZEEMPSEFB1" class="details-link" title="Commander"><i class="bi bi-bag-dash"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?= URLROOT ?>/public/img/products/product-9.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Plus</h4>
              <p>Enfant</p>
              <a href="<?= URLROOT ?>/public/img/products/product-9.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="More"><i class="bx bx-plus"></i></a>
              <a href="https://wa.me/message/XUMZZEEMPSEFB1" class="details-link" title="Commander"><i class="bi bi-bag-dash"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Products Section -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Prix</h2>
          <p>Voici nos prix classés</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Homme</h3>
              <h4><sup>$</sup>15<span> / chaussure</span></h4>
              <ul>
                <li>Sandale cousue</li>
                <li>Sandale en cuir</li>
                <li>Autres</li>
              </ul>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Femme</h3>
              <h4><sup>$</sup>10<span> / chaussure</span></h4>
              <ul>
                <li>Sandale cousue</li>
                <li>Sandale en cuir</li>
                <li>Autres</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Autres</span>
              <h3>Enfant</h3>
              <h4><sup>$</sup>8<span> / chaussure</span></h4>
              <ul>
                <li>Sandale cousue</li>
                <li>Sandale en cuir</li>
                <li>Autres</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Équipe</h2>
          <p>Ici nous sommes</p>
        </div>

        <div class="row">

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="public/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Denise M.</h4>
                <span>CEO</span>
                <p>Concepteur et gestionnaire de produits</p>
                <div class="social">
                  <a href=""><i class="ri-whatsapp-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="public/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nicole F.</h4>
                <span>Commercialisation</span>
                <p>En charge de trouver des partenaires et des clients</p>
                <div class="social">
                  <a href=""><i class="ri-whatsapp-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="public/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr Claude</h4>
                <span>Fabricant de semelles</span>
                <p>En charge de la finalisation des produits</p>
                <div class="social">
                  <a href=""><i class="ri-whatsapp-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacter Nous</h2>
        </div>
        <div class="row box">
        <div class="col-lg-4 mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100" >
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Emplacement:</h4>
              <p>N28 Kyeshero Q, Goma, RDC</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>denmoda98@gmail.com</p>
              <p>denisema404@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="facebook">
              <i class="bi bi-facebook"></i>
              <h4>Facebook:</h4>
              <a href="https://web.facebook.com/profile.php?id=100078174605745">DenModa/Facebook</a>
            </div>
            <div class="whatsapp">
              <i class="bi bi-whatsapp"></i>
              <h4>Whatsapp:</h4>
              <p>+243970604239</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
        <div class="info">
            <div class="instagram">
              <i class="bi bi-instagram"></i>
              <h4>Instagram:</h4>
              <a href="https://www.instagram.com/denise_maombi/">DenModa/Instagram</a>
            </div>
            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+243970604239</p>
            </div>
          </div>
        </div>
        </div>

      </div>
    </section>
    <!-- End Contact Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Questions Fréquemment posés</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> 
              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">
              Comment commander? 
                <i class="bx bx-chevron-down icon-show"></i>
                <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                En cliquant sur le bouton de commander et en remplissant le formulaire .
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> 
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">
              Après combien de temps un client qui a commandé peut-il recevoir le produit?                
                <i class="bx bx-chevron-down icon-show"></i>
                <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                Nous donnons un délai d’une semaine maximum.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> 
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">
              Comment obtenir le produit? 
                <i class="bx bx-chevron-down icon-show"></i>
                <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                Nous livrons le produit à votre convenance. Vous avez juste besoin de nous donner l’heure et l’endroit où vous joindre.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> 
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">
              Quel sont les matériels utilisés? 
                <i class="bx bx-chevron-down icon-show"></i>
                <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                Certains de nos produits sont fabriqués à partir de fil, ce qui signifie que nous les cousons à la main, puis que nous fixons la semelle extérieure qui provient du pneu. 
                Et d’autres produits sont fabriqués à partir de cuir et après avoir mis la semelle extérieure des pneus aussi.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Do you offer good product quality service? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                Oui, nos produits sont fait à partir de semelle extérieure de pneus, ce qui les rend durables et de bonne qualité.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include('../app/views/includes/footer.php');
  ?>
  <!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= URLROOT ?>/public/vendor/aos/aos.js"></script>
  <script src="<?= URLROOT ?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= URLROOT ?>/public/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= URLROOT ?>/public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= URLROOT ?>/public/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= URLROOT ?>/public/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= URLROOT ?>/public/js/main.js"></script>

</body>

</html>