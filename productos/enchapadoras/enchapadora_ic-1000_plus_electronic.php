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
                    <img src="<?php echo "../../img/productos/enchapadoras/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/enchapadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/enchapadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/enchapadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/enchapadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/enchapadoras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/enchapadoras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>Alta tecnología para quien está acostumbrado a la calidad. La fabricación de muebles sobre medida, no permite errores, es una actividad que involucra diseño y arte, por eso Inmes ha desarrollado para usted la enchapadora IC-1000 Plus Electronic. La solución en enchapado pasa por aquí. 
                    <br>
                    <br> 
                    Una máquina accesible para quien le gusta la flexibilidad. La IC-1000 Plus Electronic permite el cambio rápido del calderín, facilitando el pegado del canto, con colores diferente de pegamento.
                    <br>
                    <br>
                    Con diseño innovador, La IC-1000 Plus Electrónic es un equipo con tecnología de punta. Equipada con conjunto motoreductor industrial es robusto y potente.
                    <br>
                    <br>
                    La IC-1000 Plus Electronic viene equipada con un moderno sistema electrónico, que hace con que después de 15 minutos de espera la máquina entra a modo "Stand by", bajando la temperatura, evitando que la cola sga calentando innecesariamente y se recocine.
                </p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">CAMBIO DEL CALDERIN</p>
                    <li class="mb-2">La enchapadora de cantos IC-1000 Plus Electronic, posibilita el cambio del calderín de forma práctica y rápida. Lo que garantiza la lata productividad en el uso de varios colores y tipos de pegamentos. (El calderín es opcional)</li>

                    <p class="text-uppercase font-weight-bold mb-1">SOPORTE PARA EL CALDERIN DE REPUESTO</p>
                    <li class="mb-2">La IC-1000 Plus Electronic posibilita el encaje de un soporte para el calderín extra, contribuyendo para mejorar la organización del área de trabajo.</li>

                    <p class="text-uppercase font-weight-bold mb-1">SISTEMA "STAND BY"</p>
                    <li class="mb-2">La IC-1000 Plus Electrónic viene equipada con un moderno sistema electrónico, que hace con que después de 15 minutos de espera, la máquina entra en "Stand By" bajando la temperatura, evitando a que el pegamento se recocine.</li>

                    <p class="text-uppercase font-weight-bold mb-1">PANEL DE CONTROL</p>
                    <li class="mb-2">Con un panel de control de fácil operación, es posible controlar la velócidad de trabajo con precisión. Regular la temperatura de trabajo siguiendo las especificaciones del fábricante de adhesivos, habilitar y deshabilitar el avance sin apagar el equipo.</li>

                    <p class="text-uppercase font-weight-bold mb-1">MOTO-REDUCTOR INDUSTRIAL</p>
                    <li class="mb-2">La enchapadora IC-1000 Plus Electrónic es un equipo industrial, el conjunto moto-reductor usa motor trifásico y reductor industrial, lo que garantiza mayor vida útil al equipo.</li>

                    <p class="text-uppercase font-weight-bold mb-1">CALDERIN MOVIL</p>
                    <li class="mb-2">El calderín de la IC-1000 Plus Electrónic es móvil, adaptandose a las variaciones de la pieza. Proporcionando un pegado con calidad superior.</li>

                    <p class="text-uppercase font-weight-bold mb-1">CORTADORA DEL CANTO</p>
                    <li class="mb-2">La IC-1000 Plus Electrónic posee un sistema de corte del canto manual, práctico y de fácil operación.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">ALIMENTADOR DE AVANCE</p>
                    <li class="mb-2">La enchapadora de cantos IC-1000 Plus Electrónic ya viene preparada para ser instalado el alimentador de Avance modelo PF-32 y mesa de rodillos IMR-8, como opcional.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Equipada con 1 calderín</li>
                    <li class="mb-2">Posibilidad de cambio del calderín (cañderín extra vendido por separado)</li>
                    <li class="mb-2">Motor y reductor industrial</li>
                    <li class="mb-2">La regulación de la cantidad de adhesivo es fácil y precisa</li>
                    <li class="mb-2">Ancho del canto 12 - 73 mm</li>
                    <li class="mb-2">Espesor del canto mínimo 0,3 y máxima de 3 mm</li>
                    <li class="mb-2">Velocidad de avance de 3,5 a 9 m / min</li>
                    <li class="mb-2">Temperatura del calderín 140 ºC a 250 ºC</li>
                    <li class="mb-2">Potencia 2200 W</li>
                    <li class="mb-2">Material de trabajo: Madera, papel, PVC y ABS</li>
                    <li class="mb-2">El adhesivo se aplica en la pieza</li>
                    <li>Pintura epoxi de alta calidad</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>