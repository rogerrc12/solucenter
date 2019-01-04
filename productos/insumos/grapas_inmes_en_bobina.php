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
                <p>Las grapas INMES en bobina se utilizan para la unión de perfiles de madera o plástico, en la fabricación de cuadros, puertas retratos, muebles, puertas, ventanas, entre otros.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">La grapa en bobina "VR" fue desarrollado para el grapado de perfiles que usan madera de media densidad. (Madera de media dureza)</li>
                    <li class="mb-2">El clip en bobina "NR" fue desarrollado para el grapado de perfiles que usan madera de baja densidad. (Madera suave)</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">* Son fabricados en bobina, propiciando un grapado eficaz en maderas de baja y media dureza;</li>
                    <li class="mb-2">Construido en acero de alta resistencia</li>
                    <li class="mb-2">Posee afilado en uno de los bordes mejorando la penetración en el perfil</li>
                    <li class="mb-2">Se confecciona en tamaños de 5, 7, 10, 12, 15 mm</li>
                    <li class="mb-2">* Puede ser utilizado en madera de baja dureza "NR" y madera media dureza "VR".</li>
                    <li>Observación: Embalaje estándar con dos bobinas.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>