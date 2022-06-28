<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{('back/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">


    <nav class="navbar navbar-expand-lg bg-dark" aria-label="Twelfth navbar example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-nav">
            <ul class="navbar-nav">
                <li class="navbar-nav">
                    <a class="nav-link active text-light" href="#"> Home</a>
                </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled text-light">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown10">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
