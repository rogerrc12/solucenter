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
                    <img src="<?php echo "../../img/productos/sierras/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>La INMES presenta la Sierra de 1/2 Esquadria IM-1029, más silenciosa y robusta del mercado. Indicada para uso en marquerías, cerrajerías, carpinterías, fábricas de muebles, construcción civil y decoradores.</p>
                <a href="../../marqueria.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Acompaña lámina de sierra Ø250 x 2,5 / 1,8 x 30 z 24</li>
                    <li class="mb-2">Motor de inducción de 1600 W (no utiliza carbones)</li>
                    <li class="mb-2">Menor Ruido debido al motor de inducción</li>
                    <li class="mb-2">Más fuerza y ​​durabilidad</li>
                    <li class="mb-2">Excelente precisión en cortes preajustados</li>
                    <li class="mb-2">Indicadores de ángulo precisos</li>
                    <li class="mb-2">Base móvil de 0º a 50º hacia la izquierda y de 0º a 50º hacia la derecha</li>
                    <li class="mb-2">Versatilidad de corte</li>
                    <li class="mb-2">Precisión y rapidez en los cambios de ángulo</li>
                    <li class="mb-2">Ángulos preestablecidos para cortes en: 0º, 15º, 22,5º, 30º, 45º y 50º a derecha e izquierda</li>
                    <li>Inclinación del cabezal de 0º a 45º hacia la izquierda</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>