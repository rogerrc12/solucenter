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
                    <img src="<?php echo "../../img/productos/grampeadoras/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/grampeadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/grampeadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/grampeadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/grampeadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/grampeadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/grampeadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>
                Alta tecnología para quien está acostumbrado a la calidad. La fabricación de cuadros no permite errores, es una actividad que involucra arte, por lo que Inmes ha desarrollado para usted la grapadora IM-5P. La solución de grapado pasa por aquí.
                </p>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">El exclusivo sistema magnético de cambio rápido del presor ha sido desarrollado para que el marco pueda cambiar el tipo de presionador con agilidad y rapidez, aumentando la productividad y la calidad del grapado.</li>
                    
                    <li class="mb-2">El sistema de ajuste rápido de altura del pulsador facilita el trabajo del marco, pues con sólo un toque en el botón es posible ajustar la altura del presionador con agilidad y precisión.</li>

                    <li class="mb-2">El exclusivo presionador hidráulico Inmes, fue diseñado para conceder una fuerza uniforme de sujeción sobre el marco, garantizando la grapado de alta calidad principalmente en marcos anchos.</li>

                    <li class="mb-2">El pulsador horizontal actúa como un resorte, haciendo que las piezas de marco sean presionadas una contra la otra, aumentando significativamente la calidad del grapado.</li>

                    <li class="mb-2">La Parada del marco tiene dos regulaciones: La regulación "A" permite ajustar el ángulo de inclinación del batiente. La regulación "B" permite regular el ángulo entre los dos batientes.</li>

                    <li class="mb-2">Con el simple giro de una palanca es posible cambiar el calibre del clip. Esto debido al exclusivo sistema de cambio de la varilla del clip que dispensa llaves o piezas extras.</li>

                    <li class="mb-2">Con la manopla de accionamiento es posible mover el cabezal de grapado sin mover el marco, colocando la grapa en las posiciones deseadas. Garantía de la perfecta grapado.</li>

                    <li class="mb-2">Haciendo la regulación de presión a través de los reguladores que están colocados en la tapa de la máquina, es posible regular la fuerza que los presionadores horizontal y vertical ejercen sobre el marco.</li>

                    <li class="mb-2">El conjunto lubrifil que acompaña a la IM-5P, aumenta la vida útil de los componentes neumáticos, esencial para el buen rendimiento del equipo.</li>

                    <li class="mb-2">El pedal de accionamiento de la IM-5P activa el pulsador horizontal y luego el vertical, fijando el perfil y habilitando la grapado.</li>

                    <li class="mb-2">Utiliza grapas en barrera Inmes. "SW" para madera suave y "HW" para madera de media dureza, especialmente diseñados para proporcionar un rendimiento superior en el grapado.</li>

                    <li class="mb-2">El Prolongador Izquierdo / Derecho se utiliza para ampliar la mesa de las máquinas de grapar IM-5, facilitando la grapado de cuadros grandes. También permite utilizar la máquina con la mesa inclinada.</li>

                    <li class="mb-2">Para facilitar el grapado de cuadros grandes, Inmes desarrolló una mesa prolongadora de acero de fácil instalación.</li>
                </ul>
                <a href="../../marqueria.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Posibilita la instalación de varios accesorios</li>
                    <li class="mb-2">Producción de 1000 a 1500 cuadros por turno de 8 horas</li>
                    <li class="mb-2">Fácil uso, con accionamiento neumático. Permite grapado preciso, con alta productividad</li>
                    <li class="mb-2">Permite la utilización de grapas INMES "SW" para madera blanda y "HW" para madera media dureza</li>
                    <li class="mb-2">Tiene dos presores verticales ajustables (mecánicos o hidráulicos) y un presor horizontal, proporcionando mejor bloqueo del marco durante la grapado</li>
                    <li class="mb-2">Utiliza exclusivo sistema de regulación de la varilla del clip, posibilitando utilizar los tamaños 5, 7, 10, 12 y 15 mm</li>
                    <li class="mb-2">Acompaña 3 presionadores de cambio rápido, modelos D25, V1, V2</li>
                    <li class="mb-2">Puede grapar en varias posiciones, con el desplazamiento del conjunto cabezal o sobreponer las grapas en caso de marcos altos</li>
                    <li>Puede grapar en varias posiciones del marco y, además, sobreponer las grapas en caso de marco alto.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php')
  ?>