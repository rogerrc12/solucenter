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
                    <img src="<?php echo "../../img/productos/desengrozadoras/$producto.jpg" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/desengrozadoras/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/desengrozadoras/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/desengrozadoras/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/desengrozadoras/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/desengrozadoras/$producto.jpg" ?>" target="imgBox"><img src="<?php echo "../../img/productos/desengrozadoras/$producto.jpg" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>¡Usted pidió e INMES lo hizo! Una novedad para la industria maderera y del mueble, garantizando más flexibilidad, economía, productividad y calidad que usted ya conoce!</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">MAS FLEXIBILIDAD</p>
                    <li class="mb-2">ELa fabricación de muebles y escuadras, requieren equipos profesionales y cada vez mas flexibles. El acceso a los mas variados tipos de materia-prima demandan máquinas versatiles, por eso INMES desenvolvió la DG-505, que cuenta con un rápido sistema de regulación de espesor proporcionando flexibilidad en el día a día.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">MAS ECONOMIA</p>
                    <li class="mb-2">Con un moderno panel la DG-505 está equipada con motor de 5 HP, combiando potencia con productividad y menor consumo de energia.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">MAS PRODUCTIVIDAD</p>
                    <li class="mb-2">La nueva DG-505 posee dos velócidades de avance 4.9 y 6.1 m/min, aumentando asi la productividad de su carpintería.</li>

                    <p class="text-uppercase font-weight-bold mb-1">CAPACIDAD DE CORTE</p>
                    <li class="mb-2">Con cuatro cuchillas de 508 mm, la Plainer Desengrosadora DG-505 tiene capacidad de maquinado en la anchura de 505 mm y 204 mm en el espesor.</li>

                    <p class="text-uppercase font-weight-bold mb-1">REGULACION DE ESPESOR</p>
                    <li class="mb-2">Con una volante de fácil acceso y una escala de fácil lectura, la regulación del espesor de maquinado es rápida y precisa.</li>

                    <p class="text-uppercase font-weight-bold mb-1">EXTRACCION DE POLVO</p>
                    <li class="mb-2">Con una salida de 5 "(127 mm) La extracción de polvo es de fácil acceso.</li>

                    <p class="text-uppercase font-weight-bold mb-1">PROTECCION DE LOS HUSILLOS</p>
                    <li class="mb-2">La protección sanfonada de los husillos propicia una mayor vida útil a éstos.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Fácil acceso para el cambio de las cuchillas</li>
                    <li class="mb-2">Regulación manual de la altura de las mesas</li>
                    <li class="mb-2">Indicador analógico de regulación de las mesas, con precisión de 0,5 mm</li>
                    <li class="mb-2">Mesa de hierro fundido</li>
                    <li>Protección sanfonada de los husillos</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>