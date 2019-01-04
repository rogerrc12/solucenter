<?php
  $basename = basename($_SERVER['PHP_SELF']);
  $archivo = str_replace(".php", "", $basename);
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <?php
    if ($archivo === 'index' || $archivo === '') {
      echo '<title>Solucenter | Soluciones Modulares Perú</title>';
    }
    elseif ($archivo === 'marqueria' || $archivo === 'melamine') {
      echo "<title>Maquinas para $archivo | Solucenter</title>";
    }
    else {
      echo "<title>$archivo | Solucenter</title>";
    }
  ?>
  <meta name="robots" content="index, follow">
  <meta rel="canonical" href="https://www.solucenterperu.com">
  <meta name="description" content="Maquinas para muebleria con la más alta tecnología en la industria del mueble. Ubicados en Peré, ofrecemos asesoría y capacitación continua de nuestros productos y servicios. Innovación constante. muebles y muebleria de la mejor calidad">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
  <?php
    if ($archivo === 'index') {
      echo '<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>';
      echo '<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>';
    }
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">';
    if ($archivo === 'contacto') {
      echo '<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css" />';
    }
    if ($archivo === 'index' || $archivo === 'insumos' || $archivo === 'marqueria' || $archivo === 'melamine') {
      echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/14.0.6/css/intlTelInput.css">';
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