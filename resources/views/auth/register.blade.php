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
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                <div class="card card-plain">
                <div class="card-header pb-0 text-start" style="background-color: #cfe8d0;">
                  <h4 class="font-weight-bolder">Inscription</h4>
                  <p class="mb-0">Entrez vos identifiants de compte, puis connectez-vous!</p>
            
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                
                        <!-- Name -->
                        <div class="mt-2">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="form-control form-control-lg"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-2">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="form-control form-control-lg"  type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                
                        <!-- Password -->
                        <div class="mt-2">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="form-control form-control-lg" type="password"  name="password"  required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                
                        <!-- Confirm Password -->
                        <div class="mt-2">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" class="form-control form-control-lg" type="password"  name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                            <x-primary-button class="ms-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                    
                </div>
            </div>
               
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image:  url('{{  asset('admin/assets/img/register.jpg') }}'); background-size: cover;">
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
