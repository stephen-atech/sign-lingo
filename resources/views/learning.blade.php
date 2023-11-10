<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/plugins/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('font/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
  <div id="show_menuitems" class="my-menu">
    <div class="menu-box">
      <span>
        <i onclick="hide_menu()" class="flaticon-cancel"></i>
      </span>
      <ul>
        <li><a onclick="hide_menu()" href="profile.html">Profile</a></li>
        <li><a onclick="hide_menu()" href="">Logout</a></li>
      </ul>
    </div>
  </div>

  <section id="home">
    <header>
      <div class="container">
        <div class="main-nav">
          <div class="logo">
            <h2>Sign<span style="color: rgb(52, 239, 176);">Lingo</span></h2>
          </div>
          <div onclick="show_menu()" class="my-toogle">
            <span><i class="flaticon-menu"></i></span>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row">
        <div class="my-wrapper">
          <div class="welcome-box">
            <h3>Welcome<span style="color: rgb(52, 239, 176);">Choose a lavel</span></h3>
          </div>
        </div>

        <div id="carouselExampleDark" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="..." class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="..." class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
  </section>

  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>