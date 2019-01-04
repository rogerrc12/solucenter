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
                    <img src="<?php echo "../../img/productos/pistolas/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/pistolas/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/pistolas/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/pistolas/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/pistolas/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/pistolas/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/pistolas/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>La Pistola RI-160 P ha sido desarrollada para aplicar Rigipuntas® Inmes de 16mm en cuadros para decoración, sustituyendo el tradicional clavo, teniendo la ventaja de ser más rápido aplicar con calidad superior. La pistola está indicada para uso en las fábricas de cuadros con alto volumen de producción.</p>
                <a href="../../marqueria.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <li class="mb-2">Tiene abertura lateral, permitiendo que la pistola sea movida hacia los lados, aumentando considerablemente la velocidad de aplicación rigipontas.</li>
                    <li class="mb-2">Con mango de caucho, es ergonómica y de fácil manejo.</li>
                    <li class="mb-2">La traba del cargador de Rigipuntas es de fácil acceso, garantizando agilidad en la carga.</li>
                    <li class="mb-2">Acompaña el acoplamiento rápido, facilitando la conexión de ésta con el sistema de aire comprimido.</li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Capacidad de carga: Aproximadamente 200 Rigipuntas® Inmes 16mm (5/8)</li>
                    <li class="mb-2">Aplica Rigipuntas® Inmes, sustituyendo el tradicional clavo</li>
                    <li class="mb-2">Sistema de carga rápida</li>
                    <li class="mb-2">Indicada para uso industrial</li>
                    <li class="mb-2">Bajo nivel de ruido</li>
                    <li class="mb-2">Equipamiento ligero, con cuerpo de aluminio</li>
                    <li class="mb-2">Bloqueo de seguridad en el gatillo</li>
                    <li class="mb-2">Utilizado para producción a gran escala</li>
                    <li>Recomendado para producción a gran escala (fábrica de cuadros)</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>