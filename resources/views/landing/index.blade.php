@extends('landing.template.layout')

@section('title', 'Home')

@section('content')
<style>
  /* Memperbaiki posisi tombol navigasi */
  .carousel-control-prev,
  .carousel-control-next {
    width: 5%;
    opacity: 0.8;
  }

  .carousel-control-prev {
    left: -50px; /* Pindahkan ke pinggir kiri */
  }

  .carousel-control-next {
    right: -50px; /* Pindahkan ke pinggir kanan */
  }

  /* Efek smooth */
  .hero-img img {
    transition: transform 0.5s ease-in-out;
  }

  .hero-img img:hover {
    transform: scale(1.05);
  }
</style>
<section id="hero" class="hero section dark-background">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row gy-4 align-items-center">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
              <h1>Better Solutions For Your Business</h1>
              <p>We are a team of talented designers making websites with Bootstrap</p>
              <div class="d-flex">
                <a href="#about" class="btn-get-started">Get Started</a>
                <a href="https://youtu.be/dHC7ASTT8dk?si=32dyoemO0aTV5Q9H"
                  class="glightbox btn-watch-video d-flex align-items-center">
                  <i class="bi bi-play-circle"></i><span>Watch Video</span>
                </a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img text-end" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ asset('landing/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="container">
          <div class="row gy-4 align-items-center">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
              <h1>Innovative Solutions for Your Brand</h1>
              <p>We provide modern and creative designs for your brand</p>
              <div class="d-flex">
                <a href="#about" class="btn-get-started">Get Started</a>
                <a href="https://youtu.be/dHC7ASTT8dk?si=32dyoemO0aTV5Q9H"
                  class="glightbox btn-watch-video d-flex align-items-center">
                  <i class="bi bi-play-circle"></i><span>Watch Video</span>
                </a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img text-end" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ asset('landing/assets/img/hero-img-2.png') }}" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
</section>
<!-- Clients Section -->
<section id="clients" class="clients section light-background">

    <div class="container" data-aos="zoom-in">

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
                },
                "breakpoints": {
                    "320": {
                        "slidesPerView": 2,
                        "spaceBetween": 40
                    },
                    "480": {
                        "slidesPerView": 3,
                        "spaceBetween": 60
                    },
                    "640": {
                        "slidesPerView": 4,
                        "spaceBetween": 80
                    },
                    "992": {
                        "slidesPerView": 5,
                        "spaceBetween": 120
                    },
                    "1200": {
                        "slidesPerView": 6,
                        "spaceBetween": 120
                    }
                }
            }
            </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="landing/assets/img/clients/ClientK1-removebg-preview.png"
                        class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="landing/assets/img/clients/ClientK2-removebg-preview.png"
                        class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="landing/assets/img/clients/ClientK3-removebg-preview.png"
                        class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="landing/assets/img/clients/ClientK4-removebg-preview.png"
                        class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="landing/assets/img/clients/ClientK5-removebg-preview.png"
                        class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="landing/assets/img/clients/ClientK6-removebg-preview.png"
                        class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="landing/assets/img/clients/ClientK7-removebg-preview.png"
                        class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="landing/assets/img/clients/clients-8.webp" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </div>

</section><!-- /Clients Section -->

<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                            velit.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo</span>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>

        </div>

    </div>

</section><!-- /About Section -->

<!-- Why Us Section -->
<section id="why-us" class="section why-us light-background" data-builder="section">

    <div class="container-fluid">

        <div class="row gy-4">

            <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3><span>Eum ipsam laborum deleniti </span><strong>velit pariatur architecto aut nihil</strong>
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                </div>

                <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-item faq-active">

                        <h3><span>01</span> Non consectetur a erat nam at lectus urna duis?</h3>
                        <div class="faq-content">
                            <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span>02</span> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                        <div class="faq-content">
                            <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                                laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span>03</span> Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                        <div class="faq-content">
                            <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                <img src="landing/assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in"
                    data-aos-delay="100">
            </div>
        </div>

    </div>

</section><!-- /Why Us Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

            <div class="col-lg-6 d-flex align-items-center">
                <img src="landing/assets/img/illustration/illustration-10.webp" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content">

                <h3>Voluptatem dignissimos provident quasi corporis voluptas</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>

                <div class="skills-content skills-animation">

                    <div class="progress">
                        <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div><!-- End Skills Item -->

                </div>

            </div>
        </div>

    </div>

</section><!-- /Skills Section -->


<!-- Work Process Section -->
<section id="services" class="work-process section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="steps-item">
                    <div class="steps-image">
                        <img src="landing/assets/img/steps/steps-1.webp" alt="Step 1" class="img-fluid" loading="lazy">
                    </div>
                    <div class="steps-content">
                        <div class="steps-number">01</div>
                        <h3>Research &amp; Analysis</h3>
                        <h4><sup>$</sup>4000<span> / month</span></h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione.</p>
                        <div class="steps-features">
                            <div class="feature-item">
                                <i class="bi bi-check-circle"></i>
                                <span>Market Research</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle"></i>
                                <span>Data Analysis</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle"></i>
                                <span>User Feedback</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Steps Item -->
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="steps-item">
                    <div class="steps-image">
                        <img src="landing/assets/img/steps/steps-2.webp" alt="Step 2" class="img-fluid" loading="lazy">
                    </div>
                    <div class="steps-content">
                        <div class="steps-number">02</div>
                        <h3>Design &amp; Planning</h3>
                        <h4><sup>$</sup>300<span> / month</span></h4>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                            nisi ut aliquid ex ea commodi consequatur.</p>
                        <div class="steps-features">
                            <div class="feature-item">
                                <i class="bi bi-check-circle"></i>
                                <span>Wireframing</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle"></i>
                                <span>UI/UX Design</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle"></i>
                                <span>Prototyping</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Steps Item -->
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="steps-item">
                    <div class="steps-image">
                        <img src="landing/assets/img/steps/steps-3.webp" alt="Step 3" class="img-fluid" loading="lazy">
                    </div>
                    <div class="steps-content">
                        <div class="steps-number">03</div>
                        <h3>Development &amp; Launch</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <!-- Harga dari elemen pertama dimasukkan di sini -->
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                            nobis est eligendi optio cumque nihil.</p>
                        <div class="steps-features">
                            <div class="feature-item">
                                <i class="bi bi-check-circle"></i>
                                <span>Development</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle"></i>
                                <span>Testing</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-check-circle"></i>
                                <span>Deployment</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Steps Item -->
            </div>


        </div>

    </div>

</section><!-- /Work Process Section -->



<div class="container">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-9 text-center text-xl-start">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.</p>
        </div>
        <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
        </div>
    </div>

</div>

</section><!-- /Call To Action Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-product">Card</li>
                <li data-filter=".filter-branding">Web</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <img src="landing/assets/img/portfolio/portfolio-portrait-1.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="landing/assets/img/portfolio/portfolio-portrait-1.webp" title="App 1"
                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="landing/assets/img/portfolio/portfolio-1.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Product 1</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="landing/assets/img/portfolio/portfolio-1.webp" title="Product 1"
                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <img src="landing/assets/img/portfolio/portfolio-3.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Branding 1</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="landing/assets/img/portfolio/portfolio-3.webp" title="Branding 1"
                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <img src="landing/assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="landing/assets/img/portfolio/portfolio-4.webp" title="App 2"
                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="landing/assets/img/portfolio/portfolio-portrait-2.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Product 2</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="landing/assets/img/portfolio/portfolio-portrait-2.webp" title="Product 2"
                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <img src="landing/assets/img/portfolio/portfolio-portrait-3.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Branding 2</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="landing/assets/img/portfolio/portfolio-portrait-3.webp" title="Branding 2"
                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <img src="landing/assets/img/portfolio/portfolio-7.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="landing/assets/img/portfolio/portfolio-7.webp" title="App 3"
                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="landing/assets/img/portfolio/portfolio-8.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Product 3</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="landing/assets/img/portfolio/portfolio-8.webp" title="Product 3"
                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <img src="landing/assets/img/portfolio/portfolio-9.webp" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Branding 3</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="landing/assets/img/portfolio/portfolio-9.webp" title="Branding 2"
                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->

<!-- Team Section -->
<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="landing/assets/img/person/person-m-7.webp" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="landing/assets/img/person/person-f-8.webp" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                        <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="landing/assets/img/person/person-m-6.webp" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="landing/assets/img/person/person-f-4.webp" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->

        </div>

    </div>

</section><!-- /Team Section -->







<!-- Recent Blog Postst Section -->
<section id="recent-blog-postst" class="recent-blog-postst section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Recent Blog Posts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-5">

            <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="landing/assets/img/blog/blog-post-1.webp" class="img-fluid" alt="">
                        <span class="post-date">December 12</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                            </div>
                        </div>

                        <hr>

                        <a href="/blog-details" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->

            <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="landing/assets/img/blog/blog-post-2.webp" class="img-fluid" alt="">
                        <span class="post-date">July 17</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                            </div>
                        </div>

                        <hr>

                        <a href="/blog-details" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="landing/assets/img/blog/blog-post-3.webp" class="img-fluid" alt="">
                        <span class="post-date">September 05</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                            </div>
                        </div>

                        <hr>

                        <a href="/blog-details" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->

        </div>

    </div>

</section><!-- /Recent Blog Postst Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-5">

                <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                        frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-7">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <label for="name-field" class="pb-2">Your Name</label>
                            <input type="text" name="name" id="name-field" class="form-control" required="">
                        </div>

                        <div class="col-md-6">
                            <label for="email-field" class="pb-2">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email-field" required="">
                        </div>

                        <div class="col-md-12">
                            <label for="subject-field" class="pb-2">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject-field" required="">
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2">Message</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field"
                                required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->

@endsection