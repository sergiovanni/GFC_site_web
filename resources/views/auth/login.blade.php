
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}">
  {{-- <link rel="icon" type="image/png" href="{{ asset('admin/assets/img/favicon.png ') }}"> --}}
  <title>GFC</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('admin/assets/css/nucleo-icons.css ') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/css/nucleo-svg.css ') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('admin/assets/css/nucleo-svg.css ') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('admin/assets/css/argon-dashboard.css?v=2.0.4 ') }}"  rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
  
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100" >
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto rounded-bottom">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start" style="background-color: #cfe8d0;">
                  <h4 class="font-weight-bolder">Connexion</h4>
                  <p class="mb-0">Entrez vos identifiants de compte, puis connectez-vous!</p>
            
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="current-password" placeholder="Email" aria-label="Email">
                        </div>
                        <div class="mb-3">
                            <input class="form-control form-control-lg" type="password" name="password"  placeholder="Password" aria-label="Password">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                            <label class="form-check-label" for="remember_me">Remember me</label>
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-success btn-lg w-100 mt-4 mb-0">{{ __('Log in') }} Connexion</button>
                        </div>
                    </form>
                    
                </div>
              </div>
               
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image:  url('{{  asset('admin/assets/img/login.jpg') }}'); background-size: cover;">
                <span class="mask" style="background-color: rgba(0, 0, 0, 0.4);"></span>          
                      <h4 class="mt-5 text-white font-weight-bolder position-relative">" Bienvenue chez Global Freedom Corporation ! "</h4>
                <p class="text-white position-relative">Votre environnement administrateurs.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->

  <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/js/plugins/chartjs.min.js') }}"></script> --}}
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>