<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Blog</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">





<link href="{{('css/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{('css/carousel.css')}}" rel="stylesheet">
    <link href="{{('css/features.css')}}" rel="stylesheet">
  </head>
  <body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="ms-auto">
        <a class="navbar-brand" href="#"><b>BLOG TIDUR</b></a>
    </div>
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav md-auto mb-2 mb-md-0 ms-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#artikel">Artikel</a>
              </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#tentangkami">Tentang Kami</a>
          </li>
          <li class="nav-item ms-auto">
            <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('register') }}">Registrasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
       <img src="{{('storage/bg1.jpg')}}" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Selamat Datang di Blog Tidur.</h1>
            <p>Disini anda akan mendapatkan informasi terkait dunia Pemrograman.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{('storage/bg2.jpg')}}" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption">
            <h1>Ingin Menulis Artikel?.</h1>
            <p>Silahkan Register lalu login untuk mulai membuat artikel anda !</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}">Register Now !</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{('storage/bg3.jpg')}}" width="100%" height="100%">


        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Dapatkan Informasi Menarik di Blog ini !</h1>
            <p>Kami memiliki banyak artikel yang tentunya akan menambah pengetahuan anda !</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




    <!-- START THE FEATURETTES -->
    <p id="artikel">
    <br>
    <br>
    <br>
    <div class="container text-center text-light">
        <h1>Artikel</h1>
    </div>
    <br>
    <br>
    @forelse ($artikel as $row)
    <div class="container gx-6 mt-5" >
    <div class="row">
        <div class="col-md-5 mt-8 mb-8">
          <h2 class="featurette-heading fw-normal lh-1 text-light">{{ $row->judul }}</h2>
          <p class="lead text-light">{{ $row->body }}</p>
          <br>
          <small class="text-light">Author : {{ $row->users->name }}</small> <p>
          <small class="text-light">Kategori :  {{ $row->kategori->nama_kategori }}</small>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('storage/' . $row->gambar_artikel) }}" width="100%" height="100%">
        </div>
      </div>
      <hr class="featurette-divider">
    @empty
        <p>Data Masih Kosong.</p>
    </div>
</div>
@endforelse

<br>
<p id="tentangkami"></p>
<br>
<br>
<br>

<div class="container text-center text-light mb-5">
    <h1>Tentang Kami</h1>
</div>
<div class="container text-light mt-8">
        <p class="lead text-light">
            blog ini menyediakan informasi mengenai dunia pemrograman dengan menyuguhkan artikel yang berisi informasi mengenai pemrograman website dan lain-lain.
            Anda dapat menuli artikel juga dengan cara registrasi sebagai user kami, setelah login anda dapat mulai menulis sebuah artikel yang anda inginkan.
             Tujuan dibuat nya blog ini untuk memudahkan masyarakat mencari informasi mengenai dunia pemrograman yang tentu saja sangat berguna dimasa saat ini.
             semoga dengan adanya blog ini dapat meningkatkan pengetahuan masyarakat akan pentingnya dunia pemrograman pada zaman modern saat ini.
        </p>
</div>


<br>
<br>
<br>
<hr class="featurette-divider">
<br>

<div class="container text-center text-light mt-5">
    <h3>Blog ini dikelola oleh</h3>
</div>
<div class="container marketing mt-5">
<div class="row">
    <div class="col-lg-4">
        <img src="{{ ('storage/ferdy.jpg') }}" class="bd-placeholder-img rounded-circle mb-4" width="140" height="140">
      <h2 class="fw-normal text-white">Mochammad Ferdyan Ramadhani</h2>
      <p class="text-white">1462000215</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <img src="{{ ('storage/abdu.jpg') }}" class="bd-placeholder-img rounded-circle mb-4" width="140" height="140">

      <h2 class="fw-normal text-white">Abdussalam mustajib</h2>
      <p class="text-white">1462000192</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <img src="{{ ('storage/dani.jpg') }}" class="bd-placeholder-img rounded-circle mb-4" width="140" height="140">

      <h2 class="fw-normal text-white">Muhammad Ramadhani</h2>
      <p class="text-white">1462000200</p>
    </div><!-- /.col-lg-4 -->
    <hr class="featurette-divider">
  </div><!-- /.row -->
</div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


  </body>
</html>
