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
                <p>Alta tecnología para quien está acostumbrado a la calidad. La fabricación de muebles a medida, no permite errores, es una actividad que involucra diseño y arte, por lo que Inmes ha desarrollado para usted la Esquadreadora FF-300 Plus. La solución de corte pasa por aquí.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Con una capacidad de carga de hasta 100 kg distribuidos uniformemente, la mesa móvil mide 3000 mm de longitud y 362 mm de ancho.</li>
                    <li class="mb-2">La guía de la mesa auxiliar tiene un prolongador de 2839 mm, con una segunda parada.</li>
                    <li class="mb-2">El conjunto de corte está diseñado para garantizar una alta calidad y precisión de corte. Con un motor de 3 CV para el conjunto de sierra y rascador este equipo es perfecto para corte de chapas de MDF con revestimiento de melanina.</li>
                    <li class="mb-2">La regulación del ángulo de la sierra se realiza manualmente con indicación analógica del ángulo y precisión de 0,5 °.</li>
                    <li class="mb-2">La regulación de la altura de la sierra es hecha por un mango posicionado en el lateral de la máquina, con fácil acceso.</li>
                    <li class="mb-2">El sistema de regulación del rascador es externo. Posicionado en el lateral de la máquina el operador puede hacer  la regulación de la altura y alineación con la sierra, con facilidad y rapidez.</li>
                    <li class="mb-2">La Parada de la mesa fija posibilita la apertura de hasta 966 mm, con sistema de traba rápida. Su regla puede ser regulada para evitar que este toque en la hoja de sierra, cuando del corte a 45⁰.</li>
                    <li class="mb-2">Con una escala de medición de 1640 mm, la guía de la mesa auxiliar tiene un tope de fácil ajuste para cortes repetitivos.</li>
                    <li class="mb-2">La protección de la hoja de sierra permite al operador visualizar la pieza durante el corte y aumentar la capacidad de captación del polvo.</li>
                    <li class="mb-2">La mesa móvil posee un sistema de bloqueo que permite trabar esta en cualquier posición</li>
                    <li class="mb-2">La cuña de fijación que acompaña a la máquina se utiliza para evitar el sangrado indeseado de las piezas durante el corte.</li>
                    <li class="mb-2">Tiene panel principal y auxiliar para garantizar mayor seguridad al operador.</li>
                    <li class="mb-2">El empujador para piezas pequeñas, que acompaña la máquina se utiliza para sacar las piezas pequeñas entre la hoja de sierra y el tope de la mesa fija.</li>
                    <li class="mb-2">El empujador de sacrificio, que acompaña la máquina se utiliza para el corte de piezas pequeñas aumentando la seguridad en el corte.</li>
                    <li class="mb-2">El tope de corte en ángulo, se puede fijar fácilmente la mesa principal con precisión.</li>
                    <li>La morsa manual se utiliza principalmente para bloquear piezas pequeñas durante el corte.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Acompaña la màquina: Lámina de sierra trapezoidal de 250 mm, Riscador cónico de 120 mm, Emprendedor de sacrificio, Empuje de piezas pequeñas, Cuna de fijación.</li>
                    <li class="mb-2">Fácil acceso a la hoja de sierra y rascador;</li>
                    <li class="mb-2">Fácil acceso a la regulación del rascador;</li>
                    <li class="mb-2">Regulación manual de la altura y del angulo de la sierra</li>
                    <li class="mb-2">Indicador del ángulo analógico, con una precisión de 0,5⁰</li>
                    <li class="mb-2">Regulación de las batientes, rápida y precisa</li>
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