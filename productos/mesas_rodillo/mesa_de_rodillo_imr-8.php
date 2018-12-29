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
                <p>Desarrollado para ser utilizado como prolongador en varios equipos, cuando hay necesidad de apoyar diversos tipos de materiales.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">DETALLES DE ACABADO</p>
                    <li class="mb-2">Los pies de la mesa de rodillo tienen el acabado en plástico, mejorando la adherencia y evitando que la mesa se deslice.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">REGULACION DE ALTURA</p>
                    <li class="mb-2">La regulación de altura se realiza a través de cuatro manillas, permitiendo que la mesa se ajuste de 500 a 700 mm.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">ENCAJE DE LOS RODILLOS</p>
                    <li class="mb-2">Los rodillos son montados a través de un sistema de pin con resorte, garantizando un perfecto encaje en las guías.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">RODILLOS</p>
                    <li class="mb-2">La mesa IMR-8 está compuesta de ocho rodillos de acero zincado, con un diámetro de 40 mm</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Estructura fabricada en acero</li>
                    <li class="mb-2">Compuesta por 8 rodillos de acero galvanizado</li>
                    <li class="mb-2">Fácil regulación de altura, adaptándose fácilmente a varios tipos de máquinas</li>
                    <li>No necesita de técnico autorizado para la instalación.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>