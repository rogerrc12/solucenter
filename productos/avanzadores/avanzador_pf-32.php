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
                <p>Inmes presenta al mercado la más completa línea de Alimentadores de Avance. El modelo PF-32 con potencia de 1/4 HP (0,188 kw) reunió ligereza, economía y versatilidad en un solo equipo.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Tiene seis grados de libertad para las regulaciones que facilitan la operación.</li>
                    <li class="mb-2">Tiene medidas diferentes entre ejes para facilitar el uso.</li>
                    <li class="mb-2">En la llave de accionamiento es posible hacer la inversión de la rotación de las ruedas, invirtiendo el sentido de avance de la pieza.</li>
                    <li>Puede instalarse en varios equipos. La Enchapadora IC-1000 e IC-1000 Plus ya está preparada para recibir este equipo.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Regulación de altura fácil a través de husillo</li>
                    <li class="mb-2">Posibilidad de invertir el sentido de avance</li>
                    <li class="mb-2">Potencia: 1/4 HP (0,188 kw) monofásico</li>
                    <li class="mb-2">Rango de velocidad: 6/8/9/13 m / min (18/25 30/41 fpm)</li>
                    <li class="mb-2">Ruedas: diam. Ø80 x 30 mm x 3 pzs (3-1 / 8 "x 1-3 / 16" x 3 pz)</li>
                    <li class="mb-2">Material de las ruedas: Sintético</li>
                    <li class="mb-2">Curso de la suspensión: 18 mm (3/4 ")</li>
                    <li>Peso neto: 33 kg (73 libras)</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>