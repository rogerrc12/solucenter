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
                    <img src="<?php echo "../../img/productos/enrutadores/$producto.jpg" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/enrutadores/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/enrutadores/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/enrutadores/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/enrutadores/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/enrutadores/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/enrutadores/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>La fabricación de muebles y escuadras no permite errores, es una actividad que involucra diseño y arte, por lo que INMES ha desarrollado para usted la Tupia TI-703, con mesa de 716 mm x 770 mm. La solución en el mecanizado de madera pasa por aquí.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">La Tupia de Mesa TI-703, permite el cambio del eje a diámetros de 19 y 32 mm y el uso de sistemas de pinzas para acoplamiento de fresas.</li>
                    <li class="mb-2">Acompaña juego de herramientas, con dos ejes para herramientas con agujero de 19 mm y 32 mm y pinza para herramientas con diámetro de 1/4 "y 1/2".</li>
                    <li class="mb-2">La Parada Angular permite fresar piezas con ángulo de 0 a 60⁰.</li>
                    <li class="mb-2">Su tupia está equipada con una llave de reversión de rotación, pues en muchos casos es necesario girar la herramienta y revertir la rotación.</li>
                    <li class="mb-2">Con fácil acceso, la regulación de la Regla Guía es rápida y precisa.</li>
                    <li class="mb-2">La regulación de la altura de la herramienta es de fácil acceso y tiene escala para determinar la altura de la herramienta.</li>
                    <li>La Tupia TI-703 está equipada con guía y protección que permite mayor seguridad y calidad de trabajo.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Acompaña el equipo: 01 Llave allem 3mm, 01 Llave allem 4mm, 01 Llave allem 5mm, 01 Llave allem 8mm, 01 Llave gancho 45-52 mm, 01 Llave gancho 25-28 mm, 01 Llave de boca 36-41 mm / hexagona 23-26 mm, 01 Eje 19 mm, 01 Eje 30 mm, 01 Pinza 1/4 ", 01 Pinza 1/2 ".</li>
                    <li class="mb-2">Fácil acceso para el cambio de la herramienta</li>
                    <li class="mb-2">Ajuste manual de la altura de la herramienta</li>
                    <li class="mb-2">Indicador de la altura de la herramienta analógica, con precisión de 0,5⁰</li>
                    <li class="mb-2">Regulación de la guía, rápida y precisa</li>
                    <li class="mb-2">Posibilidad de usar el eje o la pinza</li>
                    <li>Mesa de hierro fundido</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>