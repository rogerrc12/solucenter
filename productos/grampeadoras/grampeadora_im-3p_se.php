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
                Utilizada para el grapado de perfiles de madera o plástico, cuando la producción de cuadros y porta retratos en media escala. Indicada para molduras de tamaño mediano.
                </p>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">El exclusivo sistema magnético de cambio rápido del presor ha sido desarrollado para que el marco pueda cambiar el tipo de presionador con agilidad y rapidez, aumentando la productividad y la calidad del grapado.</li>
                    
                    <li class="mb-2">El sistema de ajuste rápido de altura del pulsador facilita el trabajo del marco, pues con sólo un toque en el botón es posible ajustar la altura del presionador con agilidad y precisión.</li>

                    <li class="mb-2">tiene accionamiento a pedal mecánico. Con sistema de regulación de altura es posible ajustar para la estatura del operador.</li>

                    <li class="mb-2">* Más ergonomía para sacar el magazine. En el cambio de la varilla del clip, el operador cuenta con un rebajo en la tapa de la máquina que facilita la retirada del cargador.</li>

                    <li class="mb-2">Para facilitar la grapado de cuadros más grandes, Inmes ha desarrollado una mesa prolongadora que también sirve para almacenar los magazines y presionadores extras.</li>

                    <li class="mb-2">Utiliza grapas en barrera Inmes. "SW" para madera suave y "HW" para madera de media dureza, especialmente diseñados para proporcionar un rendimiento superior en el grapado.</li>
                </ul>
                <a href="../../marqueria.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Posibilita la instalación de varios accesorios</li>
                    <li class="mb-2">Producción de 1000 a 1500 cuadros por turno de 8 horas</li>
                    <li class="mb-2">Fácil uso, con accionamiento neumático. Permite grapado preciso, con alta productividad</li>
                    <li class="mb-2">Permite la utilización de grapas INMES "SW" para madera blanda y "HW" para madera media dureza</li>
                    <li class="mb-2">Sistema de aplicación de grapas a través de martelete</li>
                    <li class="mb-2">Acompaña 4 magazines para los grapas de 5/7, 10, 12 y 15 mm</li>
                    <li class="mb-2">Acompaña 3 presionadores de cambio rápido, modelos D25, V1, V2</li>
                    <li class="mb-2">Por ser de accionamiento neumático, dispensa la regulación de altura del presionador del marco</li>
                    <li class="mb-2">Pintura epoxi, proporciona mejor acabado al equipamiento y mayor vida útil.</li>
                    <li>Puede grapar en varias posiciones del marco y, además, sobreponer las grapas en caso de marco alto.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php')
  ?>