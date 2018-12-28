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
                <p>Más precisión, productividad y calidad. Una máquina moderna y accesible para quienes no renuncian a una ventaja rentable. Además de los ya consagrados sistemas, "Auto Auto", "Auto Speed" y "Eco Motion", la seccionadora IM-2900 V30 Electronic viene equipada con un moderno sistema de "Parada digital" que garantiza la medida de la pieza a cortar, un simple toque en el panel.
                    <br>
                    <br> 
                    El sistema de <strong>TOPE DIGITAL - MAS PRESICION</strong>, aumenta significativamente la velócidad y calidad de medición de piezas. Digitando las medidas en el panel o importandolas desde un plan de corte*, el tope se posiciona automáticamente en la medida estipulada, pudiendo el operador efectuar el corte, con presición e rápidez.
                    <br>
                    <br>
                    El sistema - <strong>AUTO POSICION</strong> aumenta siginificativamente la productividad con los cortes de piezas pequeñas, porque, identifica automáticamente el tamaño de la pieza, eliminando la necesidad de que el operador necesite medir la pieza y hacer la regulación en el panel.
                    <br>
                    <br>
                    Una gran novedad de la IM-2900 V30 Electronic, es el novedoso sistema - <strong>AUTO SPEED</strong>. Con velócidad de corte máxima de 30 m/min, el Auto Speed garantiza que la sierra corte siempre con la velócidad ideal, en función del tipo de material, del espesor del material y del filo de la lámina de sierra.
                    <br>
                    <br>
                    Otra ventaja de esta máquina es el sistema - <strong>ECO MOTION</strong> - que garantiza una economía de energía de hasta el 70 %. Este sistema analisa automáticamente la necesidad de mantener los motores funcionando y desconecta estos cuando la máquina no está cortando.
                </p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">MESA DE AIRE</p>
                    <li class="mb-2">La productividad es una necesidad constante en la industria de los muebles, por eso la Seccionadora IM-2900 V30 electrónic, posibilita la instalación de mesa con sistema de aire, facilitando el movimiento de planchas. (Item opcional)</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">FLAP TRANSPARENTE</p>
                    <li class="mb-2">En INMES, las máquinas son pensadas para satisfazer diversos aspectos. Uno de los principales es la seguridad. Por eso, la IM-2900 V30 Electronic viene equipada con un exclusivo sistema de FLAP (bandera) transparente que permite al operador, visualizar el disco de sierra durante el movimiento de dicho disco.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">MESAS CON RODILLOS AUXILIARES</p>
                    <li class="mb-2">Cuando el artista hace su obra el quiere perfección. Por eso INMES se preocupa con los detalles, a IM-2900 V30 Posee mesas de trabajo revestidas con material de baja fricción, resistente al desgaste. Las puntas de las mesas de  entrada del material poseen rodillos, que auxilian al operador durante el movimiento de la chapa, evitando que ésta sea dañada.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">LLAVE DE SEGURIDAD</p>
                    <li class="mb-2">La Seccionadora IM-2900 V30, Viene equipada con llave de seguridad en la puerta de acceso a la sierra y el incisor permitiendo la apertura de la puerta solamente en el modo de mantenimiento.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">GUIAS TRANSVERSALES</p>
                    <li class="mb-2">Para el mejor corte, el carro de la seccionadora IM-2900 V30, tiene su estructura en acero, mas resistente y durable. Acoplado a la máquina a través de guías lineares, el carro porta sierra sube y desciende con presición, proporcionando excelencia en el corte.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">GUIAS LONGITUDINALES</p>
                    <li class="mb-2">La palabra Innovación es tomada muy en serio por lo ingenieros de INMES, por eso la Seccionadora IM-2900 V30 es construida con innovador sistema de guías cilindricas, para el desplazamiento longitudinal. Construidas en acero especial, templado y rectificado, las guías garantizan la mayor durabilidad al equipo y mucho mas precisión en el corte.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">MOTORIZACION</p>
                    <li class="mb-2">Equipada con motor de 5,0 CV para la sierra e incisor, la IM-2900 V30 es la seccionadora más económica del mercado.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">EXTRACCION</p>
                    <li>Para un ambiente más saludable y economía de espacio, la IM-2900 V30 está construida con un sistema de extracción tipo corredera, otorgando mayor eficiencia de captación de polvo y mayor durabilidad al conjunto (no usa mangueras en la parte interna) y posee solamente un punto de capatación, en la parte inferior de la máquina.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Regulación de los topes, rápida y precisa</li>
                    <li class="mb-2">Sistema de cambio rápido de la sierra e incisor;</li>
                    <li class="mb-2">Exclusivo sistema de regulación de altura y posicionamiento lateral del incisor</li>
                    <li class="mb-2">La máquina avisa en el panel la hora de lubricar</li>
                    <li class="mb-2">Control automático de la posición del carro para cortes de piezas pequeñas</li>
                    <li>Contador del total y parcial de piezas cortadas.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>