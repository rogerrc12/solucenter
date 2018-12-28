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
                <p>Desarrollado para captar polvo en máquinas medianas, como escuadradoras, seccionadoras, lijadoras, pudiendo utilizar en una o más máquinas al mismo tiempo, dependiendo de las necesidades individuales de cada equipo.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Se comercializa con cinco entradas de 4 "(100 mm), para conectar una o varias máquinas. Puede recibir una serie de entradas con diferentes diámetros.</li>
                    <li class="mb-2">Está equipada con un motor WEG de alta eficiencia y una llave de encendido / apagado, con protección contra sobrecarga del motor.</li>
                    <li class="mb-2">El impulsor está construido en aluminio. Mayor durabilidad y menor riesgo de generación de chispa.</li>
                    <li>La carcasa se confecciona en acero de alta resistencia. La pintura epoxi garantiza mayor durabilidad y acabado diferenciado.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Tiene cinco entradas de 100 mm (4")</li>
                    <li class="mb-2">Bajo ruido (Ver tabla)</li>
                    <li class="mb-2">Estructura en acero pintado con tinta epoxi. Proporciona mejor acabado al equipo y mayor vida útil</li>
                    <li class="mb-2">Filtro con permeabilidad 150 l / min.dm² a 20 mm CA</li>
                    <li>Utiliza tambor estándar de 200 l (no acompaña el producto)</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>