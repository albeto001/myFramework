<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>OlldDollShop</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <link href="<?php print $base_url; ?>/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php print $base_url; ?>/css/mdb.min.css" rel="stylesheet">

  <link href="<?php print $base_url; ?>/css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>

<body>


  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">


      <a class="navbar-brand waves-effect" href="<?php print $base_url; ?>/" >
        <strong class="blue-text">OlldDollShop</strong>
      </a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect ancla" href="<?php print $base_url; ?>/#home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect ancla" href="<?php print $base_url; ?>/#productos" >Productos</a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php print $base_url; ?>/registro">Registrate</a>
          </li>
          -->
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php print $base_url; ?>/contacto" >Contacto</a>
          </li>
        </ul>


        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect">
              <span class="badge red z-depth-1 mr-1" id="contador"> 0 </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Carrito </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.facebook.com/olldDollshop" class="nav-link waves-effect" >
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/olldDollShop" class="nav-link waves-effect" >
              <i class="fab fa-twitter"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
