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
                    <img src="<?php echo "../../img/productos/avanzadores/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/avanzadores/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/avanzadores/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/avanzadores/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/avanzadores/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/avanzadores/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/avanzadores/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>Inmes presenta al mercado la más completa línea de Alimentadores de Avance. El modelo PF-3 con potencia de 1/8 HP (0,094 kw), con tres ruedas y variación de velocidad continua, es el modelo más pequeño de la línea, agrega ligereza, economía y versatilidad en un solo equipo.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Tiene un sistema electrónico de variación continua de velocidad. Por lo tanto no hay necesidad de cambio de engranajes.</li>
                    <li class="mb-2">Tiene una serie de regulaciones que facilitan la operación.</li>
                    <li>Se utiliza en máquinas de sierra, éste equipo tiene salida para conectar una campana externa.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Facilidad de ajuste de altura</li>
                    <li class="mb-2">Potencia: 1/8 HP (0,094 kw) monofásico</li>
                    <li class="mb-2">Rango de velocidad: 2 - 12 m / min (6,5 - 40 fpm)</li>
                    <li class="mb-2">Ruedas: diam. Ø76 x 30 mm x 3 pzs (3 "x 1-3 / 16" x 3 pz)</li>
                    <li class="mb-2">Material de las ruedas: PU</li>
                    <li class="mb-2">Curso de la suspensión: 8,3 mm (5/16 ")</li>
                    <li>Peso neto: 10,5 kg (23 libras)</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>