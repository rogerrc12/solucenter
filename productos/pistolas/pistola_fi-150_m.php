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
                    <img src="<?php echo "../../img/productos/pistolas/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/pistolas/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/pistolas/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/pistolas/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/pistolas/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/pistolas/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/pistolas/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>Equipamiento indicado para aplicar Flexipuntas® Inmes en porta retratos, en fabricas con pequeño volumen de producción.</p>
                <a href="../../marqueria.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Tiene un diseño moderno y ergonómico que facilita la aplicación de la flexipunta.</li>
                    <li class="mb-2">La manija de accionamiento está recubierta de un material de caucho, lo que mejora el rendimiento debido a la mejor ergonomía.</li>
                    <li class="mb-2">El botón de regulación de la profundidad de la Flexipuntas permite que el operador ajuste la profundidad de penetración de las Flexipuntas en función de la dureza del material del marco.</li>
                    <li class="mb-2">El botón de apertura del cargador se coloca en la parte superior de la pistola, facilitando la apertura del cargador y la recarga de Flexipuntas.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Capacidad de carga: Aproximadamente 200 Flexipuntas® Inmes</li>
                    <li class="mb-2">Sistema de carga rápida</li>
                    <li class="mb-2">Indicada para uso profesional</li>
                    <li class="mb-2">Aplica Flexipuntas® Inmes, sustituyendo la tradicional tramela</li>
                    <li class="mb-2">Equipamiento ligero, con cuerpo de aluminio</li>
                    <li class="mb-2">Posee regulador de potencia de aplicación de la Flexipunta®</li>
                    <li>Debe ser utilizado para producción a baja escala (molduras)</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>