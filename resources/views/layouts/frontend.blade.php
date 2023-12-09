<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dapur Wafi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route ('homepage')}}">Dapur Wafi</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact')}}">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header-->

    @yield('content')

    <!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <!-- Informasi Kontak -->
            <div class="col-lg-4 mb-4">
                <h5 class="text-white mb-3">Hubungi Kami</h5>
                <p class="text-muted">
                    Email: dapurwafilamongan@gmail.com<br>
                    Nomor HP: +62895395381220
                </p>
            </div>
            <!-- Alamat -->
            <div class="col-lg-4 mb-4">
                <h5 class="text-white mb-3">Alamat Kami</h5>
                <p class="text-muted">
                    Jalan Perumahan Setara<br>
                    Setara IV<br>
                    No. 01
                </p>
            </div>
            <!-- Peta Lokasi -->
            <div class="col-lg-4 mb-4">
                <h5 class="text-white mb-3">Lokasi Kami</h5>
                <div class="embed-responsive embed-responsive-16by9">
            
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0554748536283!2d112.3824646094181!3d-7.119569992854433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77f169c5846aaf%3A0xe08309144be7230c!2sDapur%20Wafi%20Lamongan!5e0!3m2!1sid!2sid!4v1701967870888!5m2!1sid!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></>" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>
<!-- /.footer -->

  </body>
</html>
