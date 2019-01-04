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
                    <img src="<?php echo "../../img/productos/escuadradoras/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/escuadradoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/escuadradoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/escuadradoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/escuadradoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/escuadradoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/escuadradoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>La FF-400 Plus posee alta tecnología para quienes están acostumbrados a la calidad. En la fabricación de muebles a medida, no se permite errores, es una actividad que involucra diseño y arte, por lo que Inmes ha desarrollado para usted la Esquadreadora FF-400 Plus.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Con una capacidad de carda de hasta 200 kg distribuidos de manera uniforme, la mesa principal, con 408 mm de ancho, está construida en aluminio estropeado de alta calidad y protegido por tratamiento de anodización.</li>
                    <li class="mb-2">Con la regulación eléctrica de la altura de la hoja de sierra, la FF-400 Plus es mucho más productiva.</li>
                    <li class="mb-2">Tiene sistema de indicación del ángulo de la sierra digital, con precisión de 0,5º, garantizando precisión en el corte y rapidez en la regulación del ángulo.</li>
                    <li class="mb-2">El sistema de regulación del rallador de la FF-400 Plus es externo. Posicionado en el lateral de la máquina, el operador puede ajustar la altura y la alineación con la sierra, con facilidad y rapidez.</li>
                    <li class="mb-2">La Parada de la mesa fija posibilita la apertura de hasta 1300 mm, posee sistema de traba rápida con ajuste fino de la medida. Su regla puede ser regulada para evitar que la lámina toque esto, cuando del corte a 45⁰.</li>
                    <li class="mb-2">La protección de la hoja de sierra para corte de 45 ° y 90 °, es del tipo CE, que permite que el operador visualice la pieza durante el corte y mejore significativamente la captación de polvo.</li>
                    <li class="mb-2">El empujador para piezas pequeñas, que acompaña la máquina se utiliza para sacar las piezas pequeñas entre la hoja de sierra y el tope de la mesa fija.</li>
                    <li class="mb-2">La cuña de fijación que acompaña a la máquina se utiliza para evitar el sangrado indeseado de las piezas durante el corte.</li>
                    <li class="mb-2">Con una escala de medición de 1800 mm, la guía de la mesa auxiliar tiene un tope de fácil ajuste para cortes repetitivos.</li>
                    <li class="mb-2">La guía de la mesa auxiliar tiene un prolongador de 3590 mm, con una segunda parada.</li>
                    <li>La guía de la mesa móvil permite la regulación, rápida y precisa para el corte en ángulo.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Acompaña la màquina: Lámina de sierra trapezoidal de 400 mm, Riscador cónico de 120 mm, Cuna de fijación.</li>
                    <li class="mb-2">Regulación electrica de la altura de la sierra</li>
                    <li class="mb-2">Regulación electrica del ángulo de la sierra, con lector digital</li>
                    <li class="mb-2">Fácil ajuste del rascador</li>
                    <li class="mb-2">Cierre manual del coche en varias posiciones</li>
                    <li>Escala del escáner de fácil visualización</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>