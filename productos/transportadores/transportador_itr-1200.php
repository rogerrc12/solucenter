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
                    <img src="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>La fabricación de muebles a medida, requiere equipamiento profesional, por lo que Inmes ha desarrollado para usted el transportador ITR-1200, un equipo para auxiliar en el transporte de paneles en su Carpintería.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Los brazos principales del transportador ITR-1200 están recubiertos con material de baja fricción, para evitar que el panel esté dañado.</li>
                    
                    <li class="mb-2">Está equipado con cuatro ruedas industriales, multidireccionales.</li>
                    
                    <li class="mb-2">El soporte del panel está diseñado para evitar el deslizamiento del panel.</li>
                    
                    <li class="mb-2">Permite dos posiciones de altura de 820 mm y 900 mm, según el equipo a utilizar.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Acompaña el equipo: Llave de boca M10 / M17, Llaves allem 4, 5 y 8 mm, Manual de montaje.</li>
                    <li class="mb-2">Construido en tubos de acero.</li>
                    <li class="mb-2">Construido en acero zincado, garantiza mayor durabilidad.</li>
                    <li class="mb-2">Tiene cuatro ruedas multidireccionales.</li>
                    <li class="mb-2">Posibilita dos regulaciones de altura de 820 mm y 900 mm.</li>
                    <li>Brazo principal revestido con material de baja fricción para facilitar el deslizamiento del panel.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>