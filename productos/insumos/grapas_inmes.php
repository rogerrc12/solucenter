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
                <p>Las grapas INMES se utilizan para la unión de perfiles de madera o plástico, en la fabricación de cuadros, puertas retratos, muebles, puertas, ventanas, entre otros.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">*La grapa HW se utiliza para grapado de perfiles de madera de media dureza, como los pines, MDF, etc.</li>
                    <li class="mb-2">*Con perfil de ancho 10,5 mm, el clip "UNI" fue desarrollado para máquinas Inmes y otros tipos de máquinas del mercado.</li>
                    <li class="mb-2">Con un diseño especial y fabricado con acero de alta calidad, garantiza un desempeño superior, propiciando una mejor unión de las partes. </li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Tiene su formato en "W" propiciando un grapado eficaz</li>
                    <li class="mb-2">Construido en acero de alta resistencia</li>
                    <li class="mb-2">Posee afilado en uno de los bordes mejorando la penetración en el perfil</li>
                    <li class="mb-2">Se confecciona en tamaños de 5, 7, 10, 12, 15 mm</li>
                    <li>Puede ser utilizado en madera suave "SW" y madera de media dureza "HW"</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>