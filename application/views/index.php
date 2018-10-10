<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search Doctor</title>

    <!-- Bootstrap core CSS -->
    <link href=<?= base_url("vendor/bootstrap/css/bootstrap.min.css") ?> rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href=<?= base_url("vendor/fontawesome-free/css/all.min.css") ?> rel="stylesheet">
    <link href=<?= base_url("vendor/simple-line-icons/css/simple-line-icons.css") ?> rel="stylesheet" type="text/css">
    <link href=https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href=<?= base_url("css/landing-page.css") ?> rel="stylesheet">

    <style type="text/css">
      
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-dark static-top" style="background-color: #2c3e50!important;">
      <div class="container">
        <a class="navbar-brand" href="#">Search Doctor</a>
        <a class="btn btn-primary btn-lg" href=<?= base_url("login") ?> style="background-color: #18bc9c!important;">Sign In</a>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center bg-primary" style="background-color: #18bc9c!important;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Encontre seus serviços médicos na cidade de Jequié!</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form method="post" action=<?= base_url('buscar') ?>>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Busque aqui..." style="height: 150%;">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-lg btn-block text-white" style="background-color: #2c3e50!important; height: 150%;">Buscar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-dark"></i>
              </div>
              <h3>Simplicidade</h3>
              <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-dark"></i>
              </div>
              <h3>Filtre os dados</h3>
              <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-dark"></i>
              </div>
              <h3>Avaliações</h3>
              <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase" style="background-color: #2c3e50!important; color: white;">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?= base_url('img/bg-showcase-1.jpg') ?>);"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Sobre o CTech</h2>
            <p class="lead mb-0" align="justify">Formada em 2017 pelos alunos do curso integrado de informática do Instituto Federal da Bahia, a Cagaço Tech é uma equipe de desenvolvimento de aplicativos WEB focados em facilitar a vida das pessoas. </p>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">O que as pessoas acham</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src=<?= base_url("img/testimonials-1.jpg") ?> alt="">
              <h5>Margaret E.</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src=<?= base_url("img/testimonials-2.jpg") ?> alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src=<?= base_url("img/testimonials-3.jpg") ?> alt="">
              <h5>Sarah	W.</h5>
              <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light" >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=<?= base_url("vendor/jquery/jquery.min.js") ?>></script>
    <script src=<?= base_url("vendor/bootstrap/js/bootstrap.bundle.min.js") ?>></script>

  </body>

</html>
