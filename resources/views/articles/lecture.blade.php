<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GF Corporation
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landing_page/assets/img/gfc_logo_min.png') }}" rel="icon">
    <link href=" {{ asset('landing_page/assets/img/gfc_logo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing_page/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('landing_page/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/assets/vendor/remixicon/remixicon.css" rel=') }}"stylesheet">
    <link href="{{ asset('landing_page/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('landing_page/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="index.html"><img src="{{ asset('landing_page/assets/img/.png') }}" alt=""
                        class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Acceuil</a></li>
                    <li><a class="nav-link scrollto" href="/">A Propos</a></li>
                    <li><a class="nav-link scrollto" href="/">Nos Services</a></li>
                    <li><a class="nav-link scrollto " href="/">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="/">Notre Equipe</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
                    <li><a class="nav-link scrollto" href="#contact">Contactez-nous</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>

    <!-- End Header -->


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
              <br><br>
                {{-- <a href="{{ route('welcome') }}" class="btn btn-light mb-4">
                    &larr; Retour à l'accueil
                </a> --}}

                <h1 class="display-5 fw-bold">{{ $article->titre }}</h1>

                <div class="d-flex align-items-center mb-4 text-muted">
                    <span class="me-3">
                        Publié le {{ $article->created_at->format('d M Y') }}
                    </span>
                    {{-- <span>
                    Temps de lecture: {{ ceil(str_word_count(strip_tags($article->contenu) / 200) }} min
                </span> --}}
                </div>

                @if ($article->image_path)
                    <img src="{{ asset('storage/' . $article->image_path) }}"
                        class="img-fluid rounded mb-4 object-fit-cover article-image" alt="{{ $article->titre }}">
                @endif

                <div class="article-content">
                    {!! $article->contenu !!}
                </div>

                <div class="mt-5 pt-4 border-top">
                    <a href="{{ route('welcome') }}" class="btn btn-outline-primary">
                        &larr; Retour à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .article-content {
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            margin: 1rem 0;
        }

    /* ✅ Nouveau style pour mieux cadrer l'image principale */
    .article-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    @media (max-width: 768px) {
        .article-image {
            height: 250px;
        }
    }
    @media (max-width: 768px) {
        .article-image {
            height: 250px;
        }
    }
    </style>


    <!-- ======= About Section ======= -->
    {{-- <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>A Propos</h2>
          <p>Qui somme nous?</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Global Freedom Corporation Sarl est une société basée à Cotonou, spécialisée dans le conseil, les études,
               la fourniture d’équipements et les prestations de services. Nous intervenons aux côtés des entreprises, 
               institutions et organisations pour leur offrir des solutions concrètes, adaptées et innovantes dans un 
               environnement en constante évolution. 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End About Section -->




    {{-- <form action="{{ route('contact.send') }}" method="post" role="form" class="php-email-form">
              @csrf <!-- Ceci est obligatoire -->
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Entrez votre nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="objet" id="objet" placeholder="Objet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message"rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Soumettre</button></div>
            </form> --}}

    </div>

    </div>

    </div>
    <div class="container">
        <br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

    </div>

    </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Global Freedom Corporation</h3>
            <p>Au coeur de l'innovation pour votre satisfaction! </p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright 2025 <strong><span>GFCorporation Sarl</span></strong>. Tout droits réservés
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
                Designed by <a href="{{ route('login') }}">GFC</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing_page/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing_page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing_page/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing_page/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing_page/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing_page/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landing_page/assets/js/main.js') }}"></script>

</body>

</html>
