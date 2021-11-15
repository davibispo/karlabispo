<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Karla Bispo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">       
        
        <!-- Bootstrap icon --> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <!-- TinyMCE -->
        <script src="https://cdn.tiny.cloud/1/ldxg4bwqlty3ullvgvpa9q31j2zhn9tal6fzx38q6xa9826k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: '#textarea',
                menubar: false,
            });
        </script>
    </head>
    <body class="antialiased">
        
        <!-- <button type="button" class="mobie-nav-toggle d-xl-none"><i class="bi bi-list mobie-nav-toggle"></i></button> -->
        <i class="bi bi-list mobie-nav-toggle d-xl-none"></i>
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex flex-column justify-content-center">

            <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="{{route('welcome')}}" class="nav-link scrollto"><i class="bi bi-house"></i> <span>Início</span></a></li>
                <li><a href="{{route('welcome')}}#about" class="nav-link scrollto"><i class="bi bi-person"></i> <span>Sobre mim</span></a></li>
                <li><a href="{{route('welcome')}}#portfolio" class="nav-link scrollto"><i class="bi bi-book"></i> <span>Livraria</span></a></li>
                <li><a href="{{route('welcome')}}" class="nav-link scrollto"><i class="bi bi-hdd-stack"></i> <span>Serviços</span></a></li>
                <li><a href="{{route('welcome')}}#contact" class="nav-link scrollto"><i class="bi bi-send"></i> <span>Contato</span></a></li>
            </ul>
            </nav><!-- .nav-menu -->

        </header><!-- End Header -->

        <main id="main">

            @yield('content')

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
            <h3>Karla Bispo</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
            <div class="social-links">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/raizesdainfancia/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5582993487949" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                <a href="#" class="telegram"><i class="bi bi-telegram"></i></a>
                <a href="#" class="#"><i class="bi bi-youtube"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Karla Bispo</span></strong>. Todos os direitos reservados
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | Desenvolvido por <a href="#">davibispo.com.br</a>
            </div>
            <div class="login">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="bi bi-person"></i></a>
    
                            @if (Route::has('register'))
                                <!--<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>-->
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            </div>
        </footer><!-- End Footer -->

        <!--<div id="preloader"></div>-->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        
        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/typed.js/typed.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
      
        </div>
    </body>
</html>

