<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php echo ucfirst($page) .' - '. $app['name'] ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
  <body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Emon's <em>Shop</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?= $page == 'home' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= url('/') ?>">Home</a>
              </li> 
              <li class="nav-item <?= $page == 'products' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= url('products') ?>">Products</a>
              </li>
              <li class="nav-item <?= $page == 'about-us' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= url('about-us') ?>">About Us</a>
              </li>
              <li class="nav-item <?= $page == 'contact-us' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= url('contact-us') ?>">Contact Us</a>
              </li>
              <li class="nav-item <?= $page == 'test-me' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= url('test-me') ?>">Test Me</a>
              </li>
              <li class="nav-item <?= $page == 'test-class' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= url('test-class') ?>">Test Class</a>
              </li>
              <li class="nav-item <?= $page == 'cart' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= url('cart') ?>">Cart</a>
              </li>


            </ul>
          </div>
        </div>
      </nav>
    </header>
