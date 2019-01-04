<?php
    include_once('../../includes/templates/producto-header.php');
    $basename = basename($_SERVER['PHP_SELF']);
    $producto = strtoupper(str_replace(".php", "", $basename));
?>
  <section class="nosotros-bg d-flex align-items-center justify-content-center">
    <h1 class="H1">Máquinas para Marqueria</h1>
  </section>
  <?php
    include_once('../../includes/templates/marqueria-nav.php');
  ?>
  <article class="detalle-producto">
      <div class="container pb-5">
        <a href="../../marqueria.php" class="arrow-back">
            &#x2190;
        </a>
        <div class="row">
            <section class="col-12 col-lg-6">
                <div class="imgBox">
                    <img src="<?php echo "../../img/productos/pantografos/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/pantografos/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/pantografos/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/pantografos/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/pantografos/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/pantografos/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/pantografos/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>
                Alta tecnología para quien está acostumbrado a la calidad. La fabricación de puerta de muebles y escuadras, no permite errores. Es una actividad que involucra diseño y arte, por lo que Inmes ha desarrollado para usted el Pantógrafo IP-100, para solucionar sus problemas en el mecanizado de perfiles de aluminio y PVC, sin desperdicio de tiempo y material.
                </p>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">El conjunto de morsa acompaña al pantógrafo IP-100. De fácil regulación la morsa neumática es accionada por una válvula neumática garantizando una perfecta fijación de la pieza durante la operación de fresado.</li>
                    
                    <li class="mb-2">El Aspersor ha sido desarrollado para lubricar la fresa y la pieza durante el fresado, prolongando la vida útil de ésta y aumentando significativamente la calidad de corte.</li>

                    <li class="mb-2">Está equipado con fresa de metal duro, garantizando calidad de fresado superior y mayor vida útil</li>

                    <li class="mb-2">La boquilla de aire que acompaña al pantógrafo IP-100 se utiliza para limpiar la pieza durante el proceso de fresado.</li>

                    <li class="mb-2">La Parada izquierda permite que el operador marque con precisión el tamaño de las piezas, con puntas cortadas a 90 ° o puntas cortadas a 45 °.</li>

                    <li class="mb-2">El tope derecho permite que el operador marque con precisión el tamaño de las piezas, con puntas cortadas a 90 ° o puntas cortadas a 45 °.</li>
                </ul>
                <a href="../../marqueria.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Acompaña: Parada 90 / 45G derecha y parada 90 / 45G Izquierdo</li>
                    <li class="mb-2">Posee lubricador para fresa (aspersor)</li>
                    <li class="mb-2">Morsa neumática con dos presores</li>
                    <li class="mb-2">Curso vertical 100 mm</li>
                    <li class="mb-2">Curso horizontal 200 mm</li>
                    <li class="mb-2">Curso transversal 100 mm</li>
                    <li class="mb-2">Potencia del motor 1,0 CV (0,75 kW)</li>
                    <li class="mb-2">Rotación de la fresa 12000 rpm</li>
                    <li class="mb-2">Diámetro de la pinza para el vástago de la fresa 8 mm</li>
                    <li class="mb-2">Fresa de metal duro de 8 mm (acompañada)</li>
                    <li class="mb-2">Diámetros de fresa utilizables: 5, 8, 10 mm</li>
                    <li>Pintura epoxi de alta calidad.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php')
  ?>