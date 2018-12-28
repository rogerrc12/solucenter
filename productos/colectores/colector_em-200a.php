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
                <p>El Colector EM-200A se comercializa con dos entradas de 100 mm (4 ") para conectar una o varias máquinas. Construido en chapa de acero con pintura epoxi y equipado con 4 ruedas, es un equipo compacto ideal para conectar en equipos de pequeño y mediano porte.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">El impulsor está construido en aluminio. Mayor durabilidad y menor riesgo de generación de chispa.</li>
                    <li>La carcasa de la campana está confeccionada en plástico especial, de alta resistencia, bajo fricción y más ligero.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Equipo compacto</li>
                    <li class="mb-2">Posee cuatro ruedas para movilizar el equipo, siendo dos fijas y dos giratorias con traba</li>
                    <li class="mb-2">Carcasa confeccionada en plástico de alta resistencia y bajo peso</li>
                    <li class="mb-2">Tiene una entrada de 125 mm (5 ") o dos de 100 mm (4")</li>
                    <li class="mb-2">Bajo ruido (Ver tabla)</li>
                    <li class="mb-2">Estructura en acero pintado con tinta epoxi. Proporciona mejor acabado al equipo y mayor vida útil</li>
                    <li>Filtro con permeabilidad 150 l / min.dm² a 20 mm CA</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>