
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homeopatia Guigar</title>
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsee.css')}}">
    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.theme.css')}}">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{ asset('css/template-style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js')}}"></script>
  </head>

  <body class="size-1140">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="{{ asset('img/logo.png')}}" alt="">
              <!-- Logo version after sticky nav -->
              {{-- <img class="logo-after" src="img/logo.png" alt=""> --}}
            </a>
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="">Inicio</a></li>
                <li><a href="">Acerca de</a></li>
                <li><a href="">Contacto</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <!-- MAIN -->
      <main role="main">
        <article>
            <header class="section background-white">
              <div class="line text-center">
                <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Productos para vivir mejor</h1>
                <p class="margin-bottom-0 text-size-16 text-dark">Cuide su cuerpo. Es el único sitio que usted tiene para vivir.</p>
              </div>
            </header>
            <section class="section background-white">

            <!-- Content -->
                 @yield('content')
            </section>
          </article>
        </main>


      <!-- FOOTER -->
      <footer>
        <!-- Contact Us -->
        <div class="background-dark padding text-center footer-social">
          <a class="margin-right-10" target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">FACEBOOK</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.instagram.com"><i class="icon-instagram_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">INSTAGRAM</span></a>
        </div>

        <!-- Main Footer -->
        <section class="section-small-padding text-center background-dark full-width">
          <div class="line">
            <div class="margin">
              <!-- Collumn 1 -->
              <div class="s-12 m-12 l-4 margin-m-bottom-30">
                <h3 class="text-size-16">Dirección</h3>
                <p class="text-size-14">
                   Guadalajara<br>
                   Jalisco - México<br>
                   América
                </p>
              </div>
              <!-- Collumn 2 -->
              <div class="s-12 m-12 l-4 margin-m-bottom-30">
                <h3 class="text-size-16">Correo</h3>
                <p class="text-size-14">
                   contact@sampledomain.com<br>
                   office@sampledomain.com
                </p>
              </div>
              <!-- Collumn 3 -->
              <div class="s-12 m-12 l-4 ">
                <h3 class="text-size-16">Números de Teléfono</h3>
                <p class="text-size-14">
                   0800 4521 800 50<br>
                   0450 5896 625 16<br>
                   0798 6546 465 15
                </p>
              </div>
            </div>
          </div>
        </section>
        <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">

        <!-- Bottom Footer -->
        <section class="padding background-dark full-width">
          <div class="text-center">
            <p class="text-size-12">Copyright 2020, Raúl García</p>
          </div>
        </section>
      </footer>
    </div>
    <script type="text/javascript" src="{{ asset('js/responsee.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.events.touch.js')}}"></script>
    <script type="text/javascript" src="{{ asset('owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/template-scripts.js')}}"></script>
  </body>
</html>
