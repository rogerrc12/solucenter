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
                <p>Profesionalismo para quien está acostumbrado a la calidad. La fabricación de muebles a medida, requiere equipamiento profesional, por lo que Inmes ha desarrollado para usted la Enchapadora IC-1000 Electronic. La solución en cola bordes pasa por aquí. 
                    <br>
                    <br> 
                    Una máquina accesible para quien no abre mano de la calidad. La IC-1000 Electrónic es una máquina compacta. con porte de grande.
                    <br>
                    <br>
                    Con diseño innovador , la IC-1000 Electrónic permite hacer el canteado de planchas con espesor de hasta 77 mm. Con rápidez y precisión. Con un moderno y robusto sistema de regulación de velócidad, la IC-1000 Electrónic permite mucho mas calidad y productividad.
                    <br>
                    <br>
                    La IC-1000 Electrónic viene equipado con un sistema electrónico, que hace con que después de 15 minutos de espera la máquina entra en modo "stand by", bajando la temperatura, evitando a que el pegamento de recocine.
                </p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">SISTEMA "STAND BY"</p>
                    <li class="mb-2">La IC-1000 Electrónic viene equipada con un moderno sistema electrónico, que hace con que después de 15 minutos de espera, la máquina entra en "Stand By" bajando la temperatura, evitando a que el pegamento se recocine.</li>

                    <p class="text-uppercase font-weight-bold mb-1">PANEL DE CONTROL</p>
                    <li class="mb-2">Con un panel de control de fácil operación, es posible controlar la velócidad de trabajo con precisión. Regular la temperatura de trabajo siguiendo las especificaciones del fábricante de adhesivos, habilitar y deshabilitar el avance sin apagar el equipo.</li>

                    <p class="text-uppercase font-weight-bold mb-1">MOTO-REDUCTOR INDUSTRIAL</p>
                    <li class="mb-2">La enchapadora IC-1000 Electrónic es un equipo industrial, el conjunto moto-reductor usa motor trifásico y reductor industrial, lo que garantiza mayor vida útil al equipo.</li>

                    <p class="text-uppercase font-weight-bold mb-1">RODILLO PRESIONADOR</p>
                    <li class="mb-2">Los rodillos presionadores garantizan un pegado mas eficiente, pues, permiten que el operador presione la pieza contra estos, garantizando una mejor adhesión del canto a la pieza.</li>

                    <p class="text-uppercase font-weight-bold mb-1">GUIA DEL CANTO</p>
                    <li class="mb-2">La IC-1000 Electrónic posee un exclusivo sistema de guía del canto, garantizando una mayor precisión en el pegado del canto.</li>

                    <p class="text-uppercase font-weight-bold mb-1">REGULACION DEL ADHESIVO</p>
                    <li class="mb-2">La cantidad del pegamento puede ser regulado con presición a travéz de una palanca posicionada en la parte superior de la IC-1000 Electrónic.</li>

                    <p class="text-uppercase font-weight-bold mb-1">CALDERIN CON FACIL ACCESO</p>
                    <li class="mb-2">El calderín de la IC-1000 Electrónic tiene fácil accesoy posee tapa que evita la entrada de residuos contaminantes del pegamento.</li>

                    <p class="text-uppercase font-weight-bold mb-1">CORTADORA DEL CANTO</p>
                    <li class="mb-2">La IC-1000 Electrónic posee un sistema de corte del canto manual, práctico y de fácil operación.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">ALIMENTADOR DE AVANCE</p>
                    <li class="mb-2">La enchapadora de cantos IC-1000 Electrónic ya viene preparada para ser instalado el alimentador de Avance modelo PF-32 y mesa de rodillos IMR-8, como opcional.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Motor y reductor industrial</li>
                    <li class="mb-2">La regulación de la cantidad de adhesivo es fácil y precisa</li>
                    <li class="mb-2">Ancho del canto 80 mm</li>
                    <li class="mb-2">Espesor del canto mínimo 0,3 y máxima de 3 mm</li>
                    <li class="mb-2">Velocidad de avance de 3,5 a 9 m / min</li>
                    <li class="mb-2">Temperatura del calderín 140 ºC a 220 ºC</li>
                    <li class="mb-2">Potencia 1690 W</li>
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