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
                    <img src="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/seccionadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>Una fábrica de muebles moderna, necesita flexibilidad y calidad en la producción, por lo que Inmes ha desarrollado una máquina moderna y accesible para quienes no renuncian a un beneficio rentable. Además de su diseño, la IF-8500 viene equipada con un moderno sistema CNC que permite la confección de piezas variadas en un tiempo muy corto.
                    <br>
                    <br> 
                    Un moderno sistema CNC, proporciona mayor productividad en el proceso de perforación, fresado y ranurado de piezas, en la fábricación de muebles.
                    <br>
                    <br>
                    Una gran novedad de la IF-8500, es el Software GCAD que acompaña a la máquina. Con este software es posible proyectar con facilidad las piezas que necesitan ser maquinadas directamente de un computador en su escritorio.
                </p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">PANEL TOUCH SCREEN</p>
                    <li class="mb-2">Con un panel táctil de 7 "es fácil ver las operaciones de trabajo.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">LECTOR DE CODIGO DE BARRAS</p>
                    <li class="mb-2">Para mayor agilidad, es posible utilizar un lector de código de barras, que acompaña la máquina para llamar al programa correspondiente a la pieza en ejecución.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">POSICION DE LA PIEZA</p>
                    <li class="mb-2">En la Perforadora IF-8500, es posible mecanizar piezas de 850 mm de ancho por 3000 mm de largo.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">SISTEMA DE LUBRICACION</p>
                    <li class="mb-2">El sistema de lubricación de la perforadora es automático, con fácil acceso.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">SENSOR DE CORRECCION</p>
                    <li class="mb-2">Para una mayor precisión en la perforación en los bordes, la IF-8500 posee sensor de medición que corrige eventuales errores del corte.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">CABEZAL MULTI HERRAMIENTAS</p>
                    <li class="mb-2">Con cabezal para cinco herramientas que acompañan al equipo, es posible hacer las más diversas operaciones para la construcción  de un mueble de calidad.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">CONECTIVIDAD</p>
                    <li class="mb-2">La Perforadora IF-8500 puede ser conectada a la red a través de Cable, puerto USB o Wifi, garantizando total conectividad.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Acompaña la máquina: Broca de 32 mm, Broca de 20 mm, Broca de 5 mm, Fresa de 8 mm, Disco de sierra Ø 90 mm x 3,4 z24, Llave allen 2,5 mm, Llave para el cambio del disco de sierra.</li>
                    <li class="mb-2">Sistema de lectura de código de barras (opcional)</li>
                    <li class="mb-2">Soporte para pistola de lector de código de barras</li>
                    <li class="mb-2">Conexiones Wifi, Lan y Pendrive</li>
                    <li class="mb-2">Sistema de lubricación automática</li>
                    <li class="mb-2">Panel táctil de 7"</li>
                    <li class="mb-2">Opción de salida de las piezas por la directa o izquierda</li>
                    <li class="mb-2">Exclusivo software para diseño de piezas</li>
                    <li>Acompaña boquilla de aire para limpieza de piezas.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>