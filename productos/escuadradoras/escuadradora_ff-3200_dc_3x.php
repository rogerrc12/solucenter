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
                <p>La FF-3200 DC 3x tiene como principal característica la facilidad de operación y robustez. Tiene mando CNC en 3 ejes, ángulo y altura de la sierra y batiente de la mesa fija. La regulación del rallador es eléctrica, incremento de 0,01 mm. Permite cuatro diferentes rotaciones de la sierra. Su mando CNC es de fácil operación, permitiendo grabar 30 diferentes programas. Con motor principal con potencia de 7,5 cv y riscador con potencia de 1,0 CV, dispone de potencia para grandes jornadas de trabajo.</p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Panel de control para ajustes de ángulo, altura y dimensiones de corte. Tiene memoria disponible para 30 diferentes programas de corte.</li>
                    <li class="mb-2">A través de mando CNC, el tope de la mesa fija se mueve de forma suave y rápida, con alta precisión.</li>
                    <li class="mb-2">El conjunto de corte de la FF-3200 DC 3x se diferencia de los demás equipos del mercado por la robustez. Con un diseño diferenciado el conjunto de sierra posee un sistema de cojinete que garantiza un corte perfecto.</li>
                    <li class="mb-2">La mesa principal está construida en aluminio de alta calidad, guías y roldanas de acero templado y rectificado, dando al conjunto mayor rigidez, precisión y durabilidad.</li>
                    <li class="mb-2">Protección de la hoja de sierra para corte de 45 ° y 90 °, con sistema de cambio rápido y porta empuje.</li>
                    <li>Con la FF-3200 DC 3 x acompaña el tope de corte en ángulo, que se puede fijar en la mesa principal, de forma rápida, precisa y práctica.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Regulación CNC de la altura y del ángulo de la sierra</li>
                    <li class="mb-2">Regulación CNC de la parada de la mesa fija</li>
                    <li class="mb-2">Regulación eléctrica de la altura y desplazamiento lateral del rascador</li>
                    <li class="mb-2">Cierre manual del coche en varias posiciones</li>
                    <li>Acompaña guía para corte en ángulo y juego de herramientas</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>