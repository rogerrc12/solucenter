<?php
    include_once('../../includes/templates/producto-header.php');
    $basename = basename($_SERVER['PHP_SELF']);
    $producto = strtoupper(str_replace(".php", "", $basename));
?>
  <section class="nosotros-bg d-flex align-items-center justify-content-center">
    <h1 class="H1">Insumos</h1>
  </section>
  <?php
    include_once('../../includes/templates/insumos-nav.php');
  ?>
  <article class="detalle-producto">
      <div class="container pb-5">
        <a href="../../insumos.php" class="arrow-back">
            &#x2190;
        </a>
        <div class="row">
            <section class="col-12 col-lg-6">
                <div class="imgBox">
                    <img src="<?php echo "../../img/productos/insumos/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/insumos/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/insumos/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/insumos/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/insumos/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/insumos/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/insumos/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>Desarrollado para fijación de fondos de cuadros, la Rigiponta Inmes es fabricada en acero, con galvanizado de alta resistencia proporcionando mayor durabilidad y mejor acabado.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Fácil de usar</li>
                    <li class="mb-2">Aplicación con pistola manual</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Fabricado en acero zincado</li>
                    <li class="mb-2">Ideal para uso de fabricante de cuadros</li>
                    <li>* Tiene dos tamaños: 16mm (5/8 ") y 9,5mm (3/8").</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>