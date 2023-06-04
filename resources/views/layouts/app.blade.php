<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>MEDCATIA</title>
</head>
<style>
  body {
        font-family: "Noto Sans", sans-serif;
        /* background-color: rgb(155, 220, 220); */
  }
  .navbar {
        background-color: rgb(5, 5, 134);
  }
  .navbar-dark .navbar-nav .nav-link {
        color: white;
  }
  .navbar-brand {
        color: white;
  }
  .judul {
        font-size: 30px;
        font-weight: 600;
        font-family: "Noto Sans", sans-serif;
  }
  .paragraf p {
    margin-bottom: 0;
    margin-left: 30px;
  }
  .carousel {
    height: 550px; /* Atur tinggi carousel di sini */
  }

  .carousel-inner {
    height: 100%;
  }

  footer{
    text-align: center;
    /* padding: 0 100px; */
    background-color: rgb(5, 5, 134);
  }

  .carousel-item {
    height: 100%;
  }
  .featurette-divider {
    margin-top: 50px;
    margin-bottom: 50px;
  }
  #button1 {
      width: 250px;
      margin-top: 50px;
      margin-left: 30px;
    }
    #mycontainer {
      background-color: rgb(113, 186, 255);
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      padding: 0;
    }

    #mycontainer img {
      width: 400px;
      height: auto;
      margin-right: 20px;
    }
</style>
<body>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#"> --}}
        <img src="../images/logo1.png" alt="Logo" width="100" height="50" padding="0" class="align-text-top">
      {{-- </a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/userprice') }}">Price List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/userdoctor') }}">Jadwal Dokter</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info me-3" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
       </ul>
      </div>
    </div>
  </nav>
</header>


  @yield('content')

{{-- <footer id="footcontainer" class="container">
    <p class="float-end"><a href="#">Contact Us</a></p>
    <p>Jl.Dharmahusada No 10, Surabaya ·</p>
    <p>© 2017-2023 Klinik Dokter Hewan, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer> --}}

<footer class="footer footer-expand-md footer-dark fixed-bottom">
    <div class="container-fluid">
      <p class="float-end"></p>
      <p style="color:white">Jl.Dharmahusada No 10, Surabaya ·</p>
      <p style="color:white">© 2017-2023 Klinik Dokter Hewan, Inc. · <a style="color:white" href="#">Privacy</a> · <a style="color:white" href="#">Terms</a> . <a style="color:white"  href="#">Contact Us</a></p>
    </div>
  </footer>

    <!-- <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it's that good. <span class="text-body-secondary">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-body-secondary">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
      </div>
    </div>
    <hr class="featurette-divider"> -->
    <!-- /END THE FEATURETTES -->
  <!-- </div> -->



  <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
