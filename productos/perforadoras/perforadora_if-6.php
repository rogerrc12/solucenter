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
                <p>La perforadora IF-6 ha sido desarrollada para atender el carpintero en sus necesidades de perforación para fijación de bisagras, en el sistema de medida 52 mm y dispositivos de montagen de muebles.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">CAPTADOR DE POLVO</p>
                    <li class="mb-2">El captador de polvo y la protección de la Perforadora IF-6 se ajustan automáticamente a la altura de la pieza a ser perforada.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">SALIDA DEL CAPTADOR DE POLVO</p>
                    <li class="mb-2">La salida del captador de polvo es de fácil conexión, con un diámetro de 50 mm (2 ").</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">LLAVE</p>
                    <li class="mb-2">La llave prende/apaga la perforadora IF-6 y es de fácil acceso y posee anexada a esta una llave de emergencia.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">TOPE</p>
                    <li class="mb-2">Los topes que acompañan a la perforadora IF-6 son del tipo pendulo facilitando el trabajo, pues se recogen automáticamente cuando la necesidad de perforar es en dos posiciones.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">ESCALAS</p>
                    <li class="mb-2">Las escalas de la perforadora IF-6 son de fácil visualización, facilitando la regulación de la posición de perforación.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Acompaña la máquina: Llave hexagonal de 2,5 y 6 mm, Pernos para la fijación de la máquina, 1 broca derecha de 35 mm, 1 broca derecha de 20 mm, 2 brocas izquierda de 10 mm, 2 brocas izquierda de 5 mm, 2 brocas izquierda de 2 mm, 2 adaptados para broca de 2 mm</li>
                    <li class="mb-2">Seis mandriles de perforación</li>
                    <li class="mb-2">Diámetro de la salida de polvo 50 mm (2 ")</li>
                    <li class="mb-2">Reglas con medidas en milímetro y pulgada</li>
                    <li class="mb-2">Acompaña 2 topes de fácil regulación</li>
                    <li class="mb-2">Mesa de apoyo amplia</li>
                    <li>Motor de 1 CV</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>