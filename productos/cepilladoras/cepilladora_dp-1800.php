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
                    <img src="<?php echo "../../img/productos/cepilladoras/$producto.jpg" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/cepilladoras/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/cepilladoras/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/cepilladoras/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/cepilladoras/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/cepilladoras/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/cepilladoras/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>Profesionalismo para quien está acostumbrado a la calidad. La fabricación de muebles a medida y escuadras exige equipos profesionales, por lo que INMES ha desarrollado para usted la Desempenadora DP-1800.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Con el volante y la escala de lectura situados en una posición de fácil acceso, la regulación del grosor del corte es rápida y precisa.</li>
                    
                    <li class="mb-2">La regulación de la guía de la DP-1800 se realiza manualmente, a través de guías lo que garantiza precisión.</li>
                    
                    <li class="mb-2">En la Desempenadora DP-1800 es posible regular la altura de la mesa de salida, con rapidez y precisión.</li>

                    <li class="mb-2">La Guía de la Desempenadora DP-1800 tiene para mayor precisión: ajuste fino en los ángulos de 45 ° y 90 ° y se puede regular en cualquier posición entre estos dos ángulos.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Fácil acceso para el cambio de los cuchillos</li>
                    <li class="mb-2">Regulación manual de la altura de las mesas</li>
                    <li class="mb-2">Indicador analógico de regulación de las mesas, con precisión de 0,5 mm</li>
                    <li class="mb-2">Regulación de la posición de la guía, rápida y precisa</li>
                    <li class="mb-2">Mesa de hierro fundido</li>
                    <li>Regulación del ángulo de la guía, rápida y precisa</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>