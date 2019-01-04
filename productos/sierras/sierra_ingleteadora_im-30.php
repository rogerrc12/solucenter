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
                    Alta tecnología para quien está acostumbrado a la calidad. La fabricación de cuadros y muebles, no permite errores, es una actividad que involucra diseño y arte, por lo que Inmes ha desarrollado para usted la Sierra ingleteadora IM-30, para solucionar sus problemas de corte en perfiles de madera y plástico y aluminio, sin desperdicio de tiempo y material.
                    <br><br>
                    <strong>MÁS ROBUSTEZ</strong> - Con diseño robusto y moderno, la ingleteadora IM-30 , es el equipamiento para corte de perfiles que aumenta la productividad de su empresa. Unico equipo de la categoría que permite la instalación de una amplia gama de accesorios, la IM-30 posee el mejor costo beneficio del mercado.
                    <br><br>
                    <strong>MÁS CALIDAD</strong> - El equipo de Ingenieria de INMES desarrollo una estructura estable y confiable. Con menos vibración y menos ruido, el resultado solo podría ser un corte con altísima calidad.
                    <br><br>
                    <strong>MÁS SILENCIO</strong> - Un equipo moderno solamente podría ser el mas silencioso del mercado. Fabricada en aluminio fundido, con motor de inducción (no usa carbón) y con el disco de sierra montada directamente en el eje, la IM-30 es la máquina mas silenciosa del mercado en su categoría.
                </p>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">ESCALA DIAGRAMADA</p>
                    <li class="mb-2">Con la escala diagramada en la mesa de la máquina el operador puede hacer la medición de las piezas a ser cortadas con rapidez y agilidad.</li>

                    <p class="text-uppercase font-weight-bold mb-1">BANCADA DE FIERRO FUNDIDO</p>
                    <li class="mb-2">La bancada de fierro fundido ofrece mayor rigidez al equipo, aumentando la calidad del corte.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">SISTEMA DE GIRO RAPIDO</p>
                    <li class="mb-2">El sistema de giro rápido facilita durante el corte el movimiento del cabezal de la máquina, hacia la derecha y hacia la izquierda, mejorando la productividad.</li>

                    <p class="text-uppercase font-weight-bold mb-1">TRABADO DE PRESICION</p>
                    <li class="mb-2">La traba de precisión es construida con un sistema cónico, que garantiza el trabamiento en los ángulos de 0 ° -10 ° -15 ° -22,5 ° -30 ° y 45 °, con precisión y durabilidad.</li>

                    <p class="text-uppercase font-weight-bold mb-1">COLECTA DE POLVO</p>
                    <li class="mb-2">La IM-30 tiene una salida de polvo con diámetro amplio haciendo que al conectar un exaustor adecuado, permita que el 97% del polvo sea recolectado.</li>

                    <p class="text-uppercase font-weight-bold mb-1">BASE DE ASPIRACION</p>
                    <li class="mb-2">Utilizada como bancada colectora de polvo, para instalación de las Sierras ingleteadoras IM-30, posee extractor con eficiencia entre 80 y 97%, de acuerdo al perfil a ser cortado.</li>

                    <p class="text-uppercase font-weight-bold mb-1">PRENSA NEUMATICA</p>
                    <li class="mb-2">Utilizada para aumentar la seguridad y garantizar la perfecta fijación del perfil en el momento del corte. Indicada para perfiles de madera, plástico y aluminio en Ingleteadoras IM-30. (accesorio opcional)</li>

                    <p class="text-uppercase font-weight-bold mb-1">ASPERSOR</p>
                    <li class="mb-2">Utilizado para lubricar y refrigerar el disco de sierra durante el corte de perfiles de aluminio en la Ingleteadora IM-30, aumentando la durabilidad de la sierra y la calidad del corte. (accesorio opcional)</li>

                    <p class="text-uppercase font-weight-bold mb-1">PROLONGADORES</p>
                    <li class="mb-2">La IM-30 fue diseñada para permitir la instalación de varios accesorios entre ellos los prolongadores derecho e izquierdo, además del prolongador adicional derecho. (Accesorio opcional)</li>
                </ul>
                <a href="../../marqueria.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Posibilita la instalación de varios accesorios</li>
                    <li class="mb-2">La hoja de sierra se instala directamente sobre el eje del motor</li>
                    <li class="mb-2">Posee motor de inducción (monofásico o trifásico) de alta resistencia, bajo mantenimiento y bajo ruido</li>
                    <li class="mb-2">Trabamiento horizontal, preciso en los principales ángulos: 0 ° - 10 ° - 15 ° - 22,5 ° - 30 ° - 45 °, con sistema de pino cónico</li>
                    <li class="mb-2">Sistema de giro rápido, que facilita la elección de los ángulos</li>
                    <li class="mb-2">Estructura en aluminio fundido, de alta resistencia</li>
                    <li class="mb-2">Pintura epoxi, proporciona mejor acabado al equipamiento</li>
                    <li>Para cada tipo de material se debe utilizar el disco apropiado; no viene incluido el disco de sierra</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>