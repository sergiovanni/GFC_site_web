<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
    @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif

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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="{{ asset('landing_page/assets/img/gfc_logo.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#about">A Propos</a></li>
          <li><a class="nav-link scrollto" href="#features">Nos Services</a></li>
          <li><a class="nav-link scrollto " href="#featured-articles">Articles</a></li>
          <li><a class="nav-link scrollto" href="#team">Notre Equipe</a></li>
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
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
     <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bienvenue à  <span>Global Freedom Corporation</span></h2>
          <p class="animate__animated fanimate__adeInUp">Nous accompagnons les entreprises dans leur croissance, leur performance et leur transformation.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bienvenue à  <span>Global Freedom Corporation</span></h2>
          <p class="animate__animated fanimate__adeInUp">Nous accompagnons les entreprises dans leur croissance, leur performance et leur transformation.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bienvenue à  <span>Global Freedom Corporation</span></h2>
          <p class="animate__animated fanimate__adeInUp">Nous accompagnons les entreprises dans leur croissance, leur performance et leur transformation.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>A Propos</h2>
          <p>Qui somme nous?</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Global Freedom Corporation (GFCorporation SARL) est une entreprise béninoise à responsabilité limitée opérant à la fois comme bureau d’études et fournisseur de biens et services. Elle est née de l’initiative conjointe de plusieurs experts-consultants de haut niveau, répartis dans différents pays de l’UEMOA.
              S’appuyant sur un solide réseau de partenaires et de collaborateurs qualifiés, GFCorporation se positionne comme un acteur majeur dans l’accompagnement des entreprises, des institutions et de
            </p>

       
            <ul>
              <li><i class="ri-check-double-line"></i> </li>
              <li><i class="ri-check-double-line"></i> </li>
              <li><i class="ri-check-double-line"></i> </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            l'État, notamment dans le domaine du management, de la gestion des ressources humaines, de l’import-export et de la transformation digitale.
              Implantée à Cotonou, avec des représentants dans chaque pays de l’UEMOA, l’entreprise met l’accent sur la modernisation des systèmes d’information, le renforcement des capacités, ainsi que l’optimisation des investissements de ses clients.
             </p>
            {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

         <div class="section-title" data-aos="zoom-out">
          <h2>Nos Services</h2>
          <p>Quelle sont nos domianes de prestations </p>
        </div>

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Fournitures d’équipements </h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Études, conseils et formation</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Import/Export et services logistique </h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block"> Travaux de construction et réhabilitation</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Informatique, bureautique, énergie, climatisation, mobilier, géotechnique, etc.</h3>
                 <p class="fst-italic">
                  Chez Global Freedom Corporation, nous mettons un point d'honneur à fournir à nos partenaires des équipements informatiques et de bureau de qualité supérieure, répondant aux normes internationales. Qu’il s’agisse de matériel informatique (ordinateurs, imprimantes, périphériques réseau) ou de mobilier de bureau (bureaux, chaises ergonomiques, classeurs), nous assurons une livraison rapide, une installation professionnelle et un service après-vente réactif. Notre expertise nous permet de proposer des solutions adaptées aux besoins spécifiques de chaque structure, qu’elle soit publique, privée ou institutionnelle. Faites le choix de l'efficacité et de la fiabilité avec GFC.                </p> 
                <ul>
                  {{-- <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li> --}}
                </ul>
                <p>
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('landing_page/assets/img/features-1.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Fourniture de matériel de bureau Fourniture et installation de matériel informatique Distribution de matériel technique et industriel</h3>
                <p>
                  Global Freedom Corporation accompagne les organisations dans la réussite de leurs projets grâce à une approche fondée sur l’expertise, l’écoute et la performance. Nous réalisons des études techniques et stratégiques pour identifier les solutions les plus pertinentes face aux défis de nos clients. Nos services de conseil permettent d’optimiser les processus, renforcer les capacités internes et faciliter la prise de décision. Par ailleurs, nous proposons des formations pratiques et ciblées, adaptées aux besoins spécifiques des équipes, afin de garantir une montée en compétence durable. Grâce à notre accompagnement, chaque projet bénéficie d’une vision claire, d’outils performants et d’un soutien personnalisé.                </p>
                <!-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> -->
                <ul>
                  {{-- <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dol.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iru</li> --}}
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('landing_page/assets/img/features-2.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>            </a>
                </h3>
                <p>
                  Global Freedom Corporation assure des opérations d’import/export avec rigueur, réactivité et conformité aux exigences douanières internationales. Nous prenons en charge l’ensemble de la chaîne logistique : approvisionnement, dédouanement, transport et livraison finale. Grâce à notre réseau de partenaires fiables et à notre connaissance des réglementations en vigueur, nous garantissons une gestion fluide, sécurisée et optimisée des flux de marchandises. Qu’il s’agisse de matériel informatique, de fournitures de bureau ou d’équipements spécifiques, nous proposons des solutions logistiques sur mesure adaptées à vos délais, vos contraintes techniques et votre budget.                </p>
                <ul>
                  {{-- <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li> --}}
                </ul>
                <!-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> -->
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('landing_page/assets/img/features-3.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>
                  Approvisionnement et Equipement </h3>
                <p>
                  Global Freedom Corporation intervient dans la réalisation de projets de construction neuve et de réhabilitation d’infrastructures existantes, en garantissant qualité, durabilité et respect des délais. Nous mobilisons une équipe pluridisciplinaire composée d’ingénieurs, d’architectes et de techniciens expérimentés pour concevoir et exécuter des ouvrages adaptés aux besoins de nos clients, qu’il s’agisse de bâtiments administratifs, scolaires, sanitaires ou résidentiels. Nos interventions intègrent les normes environnementales et sécuritaires en vigueur, avec un suivi rigoureux à chaque étape du chantier. Avec GFC, bâtir ou rénover devient un projet maîtrisé de bout en bout.                </p>
                <!-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> -->
                <ul>
                  {{-- <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco ln voluptate tri dolore eu fugiat nulla pariatur.</li> --}}
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('landing_page/assets/img/features-4.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Commencez maintenant!</h3>
            <p>Nous intervenons aux côtés des entreprises, institutions et organisations pour leur offrir des solutions concrètes, adaptées et innovantes dans un environnement en constante évolution. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Contactez-nous</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>What we do offer</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    {{-- <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Réalisations</h2>
          <p></p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('landing_page/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{ asset('landing_page/assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img  src="{{ asset('landing_page/assets/img/portfolio/portfolio-2.jpg') }}"  class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img  src="{{ asset('landing_page/assets/img/portfolio/portfolio-3.jpg') }}"  class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img  src="{{ asset('landing_page/assets/img/portfolio/portfolio-4.jpg') }}"  class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img  src="{{ asset('landing_page/assets/img/portfolio/portfolio-5.jpg') }}"  class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('landing_page/assets/img/portfolio/portfolio-6.jpg') }}" ="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img  src="{{ asset('landing_page/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{ asset('landing_page/assets/img/portfolio/portfolio-8.jpg') }}"  class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img  src="{{ asset('landing_page/assets/img/portfolio/portfolio-.jpg') }}"  class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>  --}}
    <!-- End Portfolio Section -->
 

<!-- ======= Featured Articles Section ======= -->
<section id="featured-articles" class="featured-articles">
  <div class="container">
    <div class="section-title">
      <h2>Derniers Articles</h2>
      <p>Découvrez nos dernières publications</p>
    </div>

    <div class="row">
      @foreach($articles as $article)
      <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
          @if($article->image_path)
          <div class="card-img-container" style="height: 200px; overflow: hidden;">
            <img src="{{ asset('storage/'.$article->image_path) }}" 
                 class="card-img-top h-100 w-100 object-fit-cover" 
                 alt="{{ $article->titre }}">
          </div>
          @endif
          
          <div class="card-body">
            <h5 class="card-title">{{ $article->titre }}</h5>
            <p class="text-muted small">
              <i class="bi bi-calendar me-1"></i>
              {{ $article->created_at->format('d M Y') }}
            </p>
          </div>
          
          <div class="card-footer bg-transparent border-0 pb-3">
            <a href="{{ route('articles.lecture', $article->id) }}" 
               class="btn btn-success w-100">
              Lire l'article
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
    <div class="text-center mt-4">
      <a href="{{ route('articles.index') }}"class="btn btn-success">
        Voir tous les articles
      </a>
    </div>
  </div>
</section> 
<!-- End Featured Articles Section -->
    
     <!-- ======= Clients Section ======= -->
     <section id="clients" class="clients ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Clients</h2>
          <p>Nos Clients Institutionnels</p>
        </div>
        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('landing_page/assets/img/clients/lergc_logo.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('landing_page/assets/img/clients/enabel_logo.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('landing_page/assets/img/clients/wapco_logo.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('landing_page/assets/img/clients/ralston_logo.png') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->
  



{{-- 
<!-- ======= Articles Section - Taille Unifiée ======= -->
<section id="articles" class="articles">
  <div class="container">

    <div class="section-title" data-aos="zoom-out">
      <h2>Nos Articles</h2>
      <p>Découvrez nos dernières publications</p>
    </div>

    <!-- Filtres (inchangé) -->
    <ul id="articles-filters" class="d-flex justify-content-end" data-aos="fade-up">
      <li data-filter="*" class="filter-active">Tous</li>
      <li data-filter=".filter-tech">Technologie</li>
      <li data-filter=".filter-business">Business</li>
      <li data-filter=".filter-design">Design</li>
    </ul>

    <!-- Conteneur des articles avec hauteur fixe -->
    <div class="row articles-container" data-aos="fade-up">
      
      <!-- Article 1 -->
      <div class="col-lg-4 col-md-6 portfolio-item filter-tech">
        <div class="card h-100">
          <div class="portfolio-img" style="height: 200px; overflow: hidden;">
            <img src="https://source.unsplash.com/random/600x400/?tech,1" 
                 class="img-fluid w-100 h-100 object-fit-cover" 
                 alt="Nouvelles tendances tech">
          </div>
          <div class="card-body portfolio-info d-flex flex-column">
            <h4 class="card-title">Révolution IA 2023</h4>
            <p class="text-muted mb-3">15 Jan 2023</p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="https://source.unsplash.com/random/600x400/?tech,1" 
                 data-gallery="articlesGallery" 
                 class="portfolio-lightbox preview-link" 
                 title="Révolution IA 2023">
                <i class="bx bx-zoom-in"></i> Zoom
              </a>
              <a href="article-details.html" class="details-link" title="Lire l'article">
                <i class="bx bx-book-reader"></i> Lire
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Article 2 (même structure) -->
      <div class="col-lg-4 col-md-6 portfolio-item filter-business">
        <div class="card h-100">
          <div class="portfolio-img" style="height: 200px; overflow: hidden;">
            <img src="https://source.unsplash.com/random/600x400/?business,1" 
                 class="img-fluid w-100 h-100 object-fit-cover" 
                 alt="Stratégies marché">
          </div>
          <div class="card-body portfolio-info d-flex flex-column">
            <h4 class="card-title">Stratégies marché</h4>
            <p class="text-muted mb-3">22 Fév 2023</p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="https://source.unsplash.com/random/600x400/?business,1" 
                 data-gallery="articlesGallery" 
                 class="portfolio-lightbox preview-link" 
                 title="Stratégies marché">
                <i class="bx bx-zoom-in"></i> Zoom
              </a>
              <a href="article-details.html" class="details-link" title="Lire l'article">
                <i class="bx bx-book-reader"></i> Lire
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Article 3 (même structure) -->
      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="card h-100">
          <div class="portfolio-img" style="height: 200px; overflow: hidden;">
            <img src="https://source.unsplash.com/random/600x400/?design,1" 
                 class="img-fluid w-100 h-100 object-fit-cover" 
                 alt="Design moderne">
          </div>
          <div class="card-body portfolio-info d-flex flex-column">
            <h4 class="card-title">Design Moderne 2023</h4>
            <p class="text-muted mb-3">05 Mar 2023</p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="https://source.unsplash.com/random/600x400/?design,1" 
                 data-gallery="articlesGallery" 
                 class="portfolio-lightbox preview-link" 
                 title="Design Moderne 2023">
                <i class="bx bx-zoom-in"></i> Zoom
              </a>
              <a href="article-details.html" class="details-link" title="Lire l'article">
                <i class="bx bx-book-reader"></i> Lire
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  /* Styles garantissant l'uniformité */
  .portfolio-item .card {
    border: none;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s;
  }
  
  .portfolio-item:hover .card {
    transform: translateY(-10px);
  }
  
  .portfolio-img img {
    transition: transform 0.5s;
  }
  
  .portfolio-item:hover .portfolio-img img {
    transform: scale(1.05);
  }
  
  .card-body {
    padding: 1.5rem;
    height: calc(100% - 200px); /* Complément à la hauteur d'image */
  }
  
  .card-title {
    font-size: 1.1rem;
    margin-bottom: 0.75rem;
    line-height: 1.3;
  }
</style>


 --}}


    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Témoignages</h2>
          <p>quelques témoignagent clients</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('landing_page/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('landing_page/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('landing_page/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('landing_page/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('landing_page/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    <!-- End Testimonials Section -->

        <!-- ======= Founisseurs Section ======= -->
        <section id="clients" class="clients ">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h2>Partenaires</h2>
              <p>Nos Partenaires & Fournisseurs</p>
            </div>
    
            <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="{{ asset('landing_page/assets/img/clients/lergc_logo.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landing_page/assets/img/clients/enabel_logo.jpg') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landing_page/assets/img/clients/wapco_logo.jpg') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landing_page/assets/img/clients/ralston_logo.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('landing_page/assets/img/clients/yamaha_logo.png') }}" class="img-fluid" alt=""></div>
                <!-- <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div> -->
              </div>
              <div class="swiper-pagination"></div>
            </div>
    
          </div>
        </section>
        <!-- End Founisseurs Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Pricing</h2>
          <p>Our Competing Prices</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> -->
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Notre Equipe</h2>
          <p>Notre Equipe</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{ asset('landing_page/assets/img/team/2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Landry ZOLIKPO</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('landing_page/assets/img/team/3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Cyrille ZINGAN</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('landing_page/assets/img/team/1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sylvanus ZOLIKPO </h4>
                <span>CTO</span>
              </div>
            </div>
          </div>



      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contacts</h2>
          <p>Contactez-nous</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adresse:</h4>
                <p>C/713 Entrée 928 Gbégamey Cotonou N°RCCM: RB/COT/19 B 25384 N° IFU : 3201910996727</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>gfcorporationsarl@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>+229 0199885511</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <!-- Dans resources/views/welcome.blade.php -->
<section id="contact">
  <form action="{{ route('contact.send') }}" method="POST">
      @csrf
      <div class="row">
          <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" name="email" class="form-control" placeholder="Votre email" required>
          </div>
      </div>
      <div class="form-group mt-3">
          <input type="text" name="objet" class="form-control" placeholder="Objet" required>
      </div>
      <div class="form-group mt-3">
          <textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="text-center mt-3">
          <button type="submit">Envoyer</button>
      </div>
  </form>

  @if(session('success'))
      <div class="alert alert-success mt-3">
          {{ session('success') }}
      </div>
  @endif
</section>

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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.235239991296!2d2.408784175281797!3d6.363593993626486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x26de8a9a10d2ba9f%3A0xe187b62668310eb6!2sGlobal%20Freedom%20Coporation!5e0!3m2!1sfr!2sbj!4v1750868574289!5m2!1sfr!2sbj" width="1100" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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



