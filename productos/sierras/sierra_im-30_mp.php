<?php
    include_once('../../includes/templates/producto-header.php');
    $basename = basename($_SERVER['PHP_SELF']);
    $producto = strtoupper(str_replace(".php", "", $basename));
?>
  <section class="nosotros-bg d-flex align-items-center justify-content-center">
    <h1 class="H1">Máquinas para Marqueria</h1>
  </section>
  <?php
    include_once('../../includes/templates/marqueria-nav.php');
  ?>
  <article class="detalle-producto">
      <div class="container pb-5">
        <a href="../../marqueria.php" class="arrow-back">
            &#x2190;
        </a>
        <div class="row">
            <section class="col-12 col-lg-6">
                <div class="imgBox">
                    <img src="<?php echo "../../img/productos/sierras/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>
                    Alta tecnología para quien está acostumbrado a la calidad. La fabricación de cuadros y muebles, no permite errores, es una actividad que involucra diseño y arte, por lo que Inmes ha desarrollado para usted la Sierra ½ Esquadria IM-30 MP, para solucionar sus problemas de corte en perfiles de madera y plástico, desperdicio de tiempo y material.
                </p>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Morsa neumática Utilizada para aumentar la seguridad y garantizar la perfecta fijación del perfil en el momento del corte.</li>

                    <li class="mb-2">Acompaña los prolongadores derecho e izquierdo. Estos prolongadores poseen escalas en milímetros, para facilitar la medición del perfil, además de servir de apoyo para estos perfiles, durante el corte.</li>

                    <li class="mb-2">La traba de precisión es construida con un sistema cónico, que garantiza el trabamiento en los ángulos de 0 ° -10 ° -15 ° -22,5 ° -30 ° y 45 °, con precisión y durabilidad.</li>

                    <li class="mb-2">Base aspirante Utilizada como bancada colectora de polvo, para instalación de las Sierras ½ Esquadria IM-30, posee campana con eficiencia entre 80 y 97%, conforme el perfil a ser cortado.</li>

                    <li class="mb-2">El sistema de giro rápido facilita durante el corte la impulsión del cabezal de la máquina, hacia la derecha y hacia la izquierda, mejorando la productividad.</li>

                    <li class="mb-2">Tiene una salida de polvo de diámetro amplio haciendo que al conectar una campana adecuada, hasta que el 97% del polvo sea recolectado.</li>
                </ul>
                <a href="../../marqueria.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Equipamiento compuesto por: Sierra ½ Esquadria IM-30, Lámina de sierra 300x30x3,0 z 90 (madera), Morsa Neumática, Prolongadores Derecho, Prolongador Izquierdo, Base Aspirante, Parada móvil</li>
                    <li class="mb-2">La hoja de sierra se instala directamente sobre el eje del motor</li>
                    <li class="mb-2">Posee motor de inducción (monofásico o trifásico)</li>
                    <li class="mb-2">Frenado horizontal, preciso en los principales ángulos: 0 ° - 10 ° - 15 ° - 22,5 ° - 30 ° - 45 °, con sistema de perno cónico</li>
                    <li class="mb-2">Sistema de giro rápido, que facilita la elección de los ángulos</li>
                    <li class="mb-2">Escala diagramada, permite medir los perfiles sin metro</li>
                    <li class="mb-2">Estructura en aluminio fundido, de alta resistencia</li>
                    <li>Pintura epoxi, proporciona un mejor acabado.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>