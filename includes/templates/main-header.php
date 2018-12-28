<?php
  $basename = basename($_SERVER['PHP_SELF']);
  $archivo = str_replace(".php", "", $basename);
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Soluciones Modulares Perú | <?php if ($archivo === '' || $archivo === 'index') {echo 'Inicio';} else {echo $archivo;} ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
  <?php
    if ($archivo === 'index') {
      echo '<link rel="stylesheet" href="helpers/slick/slick.css">';
      echo '<link rel="stylesheet" href="helpers/slick/slick-theme.css">';
    }
    echo '<link rel="stylesheet" href="css/bootstrap.min.css">';
    echo '<link rel="stylesheet" href="css/normalize.css">';
    if ($archivo === 'contacto') {
      echo '<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css" />';
    }
    if ($archivo === 'index' || $archivo === 'insumos' || $archivo === 'marqueria' || $archivo === 'melamine') {
      echo '<link rel="stylesheet" href="helpers/inputTel/css/intlTelInput.min.css">';
    }
    if ($archivo === 'index' || $archivo === 'insumos' || 
        $archivo === 'marqueria' || $archivo === 'melamine' || $archivo === 'contacto') {
      echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.32.2/dist/sweetalert2.min.css">';
    }
  ?>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">Estas usando un navegador obsoleto o <strong>desactualizado</strong>. Por favor <a href="https://browsehappy.com/">actualiza tu navegador</a>.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <header>
    <?php
      include_once('includes/templates/main-nav.php');
    ?>
  </header>
  <!-- Main Nav -->