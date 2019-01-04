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
                <p>La FF-325 Plus posee alta tecnología para quien está acostumbrado a la calidad. En la fabricación de muebles a medida, no se permiten errores, es una actividad que involucra diseño y arte, por lo que Inmes ha desarrollado para usted la Esquadreadora FF-325 Plus.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Con una capacidad de carda de hasta 100 kg distribuidos de manera uniforme, la mesa principal, con 375 mm de ancho, está construida en aluminio estropeado de alta calidad y protegido por tratamiento de anodización.</li>
                    <li class="mb-2">El conjunto de corte de la Esquadreadora FF-325 Plus está diseñado para garantizar una alta calidad y precisión de corte. Con un motor de 5,5 CV para la sierra y uno de 3/4 CV para el rascador, este equipo es perfecto para corte de paneles de MDF chapados y maderas en general.</li>
                    <li class="mb-2">Tiene sistema de indicación del ángulo de la sierra digital, con precisión de 0,5º, garantizando precisión en el corte y rapidez en la regulación del ángulo.</li>
                    <li class="mb-2">La regulación del ángulo de la sierra se realiza por delante de la máquina. Más seguridad y velocidad de operación.</li>
                    <li class="mb-2">La regulación de la altura de la hoja de sierra está posicionada en el lateral de la máquina, el operador puede ajustar la altura de la sierra, con facilidad y rapidez.</li>
                    <li class="mb-2">El sistema de regulación del rascador es externo. Posicionado en el lateral de la máquina el operador puede hacer  la regulación de la altura y alineación con la sierra, con facilidad y rapidez.</li>
                    <li class="mb-2">La Parada de la mesa fija posibilita la apertura de hasta 1300 mm, con sistema de traba rápida. Su regla puede ser regulada para evitar que este toque en la hoja de sierra, cuando del corte a 45⁰.</li>
                    <li class="mb-2">La protección de la hoja de sierra para corte de 45 ° y 90 °, es del tipo CE, que permite que el operador visualice la pieza durante el corte y mejore significativamente la captación de polvo.</li>
                    <li class="mb-2">El empujador para piezas pequeñas, que acompaña la máquina se utiliza para sacar las piezas pequeñas entre la hoja de sierra y el tope de la mesa fija.</li>
                    <li class="mb-2">La cuña de fijación que acompaña a la máquina se utiliza para evitar el sangrado indeseado de las piezas durante el corte.</li>
                    <li class="mb-2">Con una escala de medición de 1670 mm, la guía de la mesa auxiliar tiene un tope de fácil ajuste para cortes repetitivos.</li>
                    <li class="mb-2">La guía de la mesa auxiliar tiene un prolongador de 3060 mm, con una segunda parada.</li>
                    <li class="mb-2">La guía de la mesa auxiliar permite la regulación, rápida y precisa, para corte en ángulo.</li>
                    <li>La mesa móvil posee un sistema de bloqueo que permite trabar esta en cualquier posición.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Acompaña la màquina: Lámina de sierra trapezoidal de 250 mm, Riscador cónico de 120 mm, Cuna de fijación.</li>
                    <li class="mb-2">Regulación manual de la altura de la sierra</li>
                    <li class="mb-2">Regulación manual del ángulo de la sierra, con lector digital</li>
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