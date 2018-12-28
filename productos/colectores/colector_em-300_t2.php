<?php
    include_once('../../includes/templates/producto-header.php');
    $basename = basename($_SERVER['PHP_SELF']);
    $producto = strtoupper(str_replace(".php", "", $basename));
?>
  <section class="nosotros-bg d-flex align-items-center justify-content-center">
    <h1 class="H1">Máquinas para Melamine</h1>
  </section>
  <?php
    include_once('../../includes/templates/melamine-nav.php');
  ?>
  <article class="detalle-producto">
      <div class="container pb-5">
        <a href="../../melamine.php" class="arrow-back">
            &#x2190;
        </a>
        <div class="row">
            <section class="col-12 col-lg-6">
                <div class="imgBox">
                    <img src="<?php echo "../../img/productos/colectores/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/colectores/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/colectores/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/colectores/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/colectores/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/colectores/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/colectores/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>Desarrollado para captar polvo en máquinas medianas, como escuadradoras y lijadoras, pudiendo utilizar en dos o más máquinas al mismo tiempo, dependiendo de las necesidades individuales de cada equipo.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">El impulsor está construido en aluminio. Mayor durabilidad y menor riesgo de generación de chispa.</li>
                    <li class="mb-2">La carcasa es confeccionada en acero de alta resistencia. La pintura epoxi garantiza mayor durabilidad y acabado diferenciado.</li>
                    <li class="mb-2">Equipado con ruedas industriales. Dos fijos y dos giratorios con traba.</li>
                    <li>Se comercializa con dos entradas de 100 mm (4 ") para conectar una o varias máquinas.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Posee cuatro ruedas para movilizar el equipo, siendo dos fijas y dos giratorias con traba</li>
                    <li class="mb-2">Carcasa confeccionada en plástico de alta resistencia y bajo peso</li>
                    <li class="mb-2">Tiene tres entradas de 100 mm (4")</li>
                    <li class="mb-2">Bajo ruido (Ver tabla)</li>
                    <li class="mb-2">Estructura en acero tubular pintado con tinta epoxi. Proporciona mejor acabado al equipo y mayor vida útil</li>
                    <li class="mb-2">Filtro con permeabilidad 150 l / min.dm² a 20 mm CA</li>
                    <li class="mb-2">Diámetro del tambor: 590 mm (23,23 ") a 600 mm (23,62")</li>
                    <li class="mb-2">Altura del tambor: 850 mm (33,47 ") a 740 mm (29,13")</li>
                    <li>Volumen del tambor: 200 l (52,82 gal.)</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>