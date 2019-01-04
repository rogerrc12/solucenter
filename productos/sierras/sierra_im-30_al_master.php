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
                Alta tecnología para quien está acostumbrado a la calidad. El corte de aluminio en la industria de escuadras y muebles, no permite errores, es una actividad que involucra diseño y arte, por lo que Inmes ha desarrollado para usted la Sierra ½ Esquadria IM-30 AL MASTER, para solucionar sus problemas de corte en perfiles de corte aluminio, sin desperdicio de tiempo y material.
                </p>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">* Utilizado para lubricar la hoja de sierra durante el corte de perfiles de aluminio en la Sierra ½ Esquadria IM-30.</li>

                    <li class="mb-2">Morsa neumática Utilizada para aumentar la seguridad y garantizar la perfecta fijación del perfil en el momento del corte.</li>

                    <li class="mb-2">* El cojinete de hierro fundido da mayor rigidez al equipo, aumentando la calidad del corte.</li>

                    <li class="mb-2">El sistema de giro rápido facilita durante el corte la impulsión del cabezal de la máquina, hacia la derecha y hacia la izquierda, mejorando la productividad.</li>

                    <li class="mb-2">La traba de precisión es construida con un sistema cónico, que garantiza el trabamiento en los ángulos de 0 ° -10 ° -15 ° -22,5 ° -30 ° y 45 °, con precisión y durabilidad.</li>

                    <li class="mb-2">* El tope tiene dos indicaciones para cortes de perfiles, una para cortes a 45 ° y otra para cortes a 90 °.</li>

                    <li class="mb-2">* Prolonga el lado izquierdo, de la mesa, de la Sierra 1/2 escuadra IM-30 AL, cuando de la necesidad de apoyarse en los perfiles de Aluminio con medidas de hasta 2600 mm</li>
                </ul>
                <a href="../../marqueria.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Equipamiento compuesto por: Sierra ½ Esquadria IM-30, Morsa Neumática, Base sin campana extractora, Aspersor Neumático, Prolongadores de Rodillo Derecho, Prolongador de rodillo Izquierdo, Parada, Lámina de sierra para corte de aluminio 300x30x3,2 z120</li>
                    <li class="mb-2">Los prolongadores adicionales, derecho e izquierdo, son opcionales</li>
                    <li class="mb-2">La Morsa Neumática aumenta la seguridad y garantiza la perfecta fijación del perfil en el momento del corte, siendo ésta, accionada a través de un sistema automático</li>
                    <li class="mb-2">El Aspersor Neumático proporciona, en el momento del corte, una lubricación eficiente de la hoja de sierra, mejorando el acabado y aumentando la vida útil de ésta, siendo accionado a través de un sistema automático</li>
                    <li class="mb-2">Posibilita la instalación de varios accesorios</li>
                    <li class="mb-2">La hoja de sierra se instala directamente sobre el eje del motor</li>
                    <li class="mb-2">Posee motor de inducción (monofásico o trifásico) de alta resistencia, bajo mantenimiento y bajo ruido</li>
                    <li class="mb-2">Frenado horizontal, preciso en los principales ángulos: 0 ° - 10 ° - 15 ° - 22,5 ° - 30 ° - 45 °, con sistema de perno cónico</li>
                    <li class="mb-2">Escala diagramada, que permite medir los perfiles sin ayuda de metro o trena</li>
                    <li class="mb-2">Sistema de giro rápido, que facilita la elección de los ángulos</li>
                    <li class="mb-2">Estructura en aluminio fundido, de alta resistencia</li>
                    <li class="mb-2">Para cortes precisos de perfiles de aluminio, (como lámina de sierra) que no exceda de 3 mm de espesor de pared</li>
                    <li>Pintura epoxi, proporciona un mejor acabado.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>