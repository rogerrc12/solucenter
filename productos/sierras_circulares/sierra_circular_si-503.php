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
                    <img src="<?php echo "../../img/productos/sierras_circulares/$producto.jpg" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras_circulares/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras_circulares/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras_circulares/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras_circulares/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras_circulares/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras_circulares/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>La fabricación de muebles y escuadras, no permite errores, es una actividad que involucra diseño y arte, por lo que INMES ha desarrollado para usted la Sierra Circular SI-503. La solución en corte de madera y MDF pasa por aquí.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Rápido y práctico el bloqueo de regla guía permite una regulación precisa debido al exclusivo sistema de palanca.</li>
                    
                    <li class="mb-2">Con la lectura fácil, la escala de la regla guía está provista de una lente de aumento que amplía mejorando la precisión de lectura.</li>
                    
                    <li class="mb-2">Para facilitar la organización, en el lateral de la máquina existe un soporte para la Regla Guía de fácil acceso.</li>
                    
                    <li class="mb-2">La protección de la Sierra tiene un sistema que ajusta automáticamente el grosor de la pieza a cortar, y para aumentar la seguridad también tiene un dispositivo que evita que las piezas regresen accidentalmente.</li>
                    
                    <li class="mb-2">De fácil acceso a la regulación del ángulo de la sierra es rápida y precisa.</li>
                    
                    <li class="mb-2">La regulación de la altura de la hoja de sierra de la SI-503 está posicionada en el lateral de la máquina, el operador puede ajustar la altura de la sierra con facilidad y rapidez.</li>
                    
                    <li class="mb-2">La Parada Angular permite cortar piezas con ángulo de - 60⁰ a + 60⁰.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Fácil acceso a la hoja de sierra</li>
                    <li class="mb-2">Regulación manual de la altura de la sierra</li>
                    <li class="mb-2">Regulación manual del ángulo de la sierra</li>
                    <li class="mb-2">Indicador del ángulo analógico, con una precisión de 0,5⁰;</li>
                    <li class="mb-2">Regulación de las batientes, rápida y precisa;</li>
                    <li class="mb-2">Escala de la regla guía de fácil visualización;</li>
                    <li class="mb-2">Mesa de hierro fundido;</li>
                    <li>Regla guía revestida de nylon.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>