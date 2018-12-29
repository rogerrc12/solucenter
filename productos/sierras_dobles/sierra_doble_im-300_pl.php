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
                    <img src="<?php echo "../../img/productos/sierras_dobles/$producto.png" ?>" alt="<?php $producto ?>">
                </div>
                <ul class="thumb list-inline">
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras_dobles/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras_dobles/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras_dobles/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras_dobles/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo "../../img/productos/sierras_dobles/$producto.png" ?>" target="imgBox"><img src="<?php echo "../../img/productos/sierras_dobles/$producto.png" ?>" alt="<?php $producto ?>"></a>
                    </li>
                </ul>
            </section>
            <section class="col-12 col-lg-6">
                <h2 class="H1"><?php echo str_replace('_', ' ', $producto)  ?></h2>
                <p>Alta tecnología para quien está acostumbrado a la calidad. La fabricación de cuadros, porta-retratos en serie y muebles, no permite errores, es una actividad que involucra diseño, arte, por lo que Inmes desarrolló para usted la Sierra Doble IM-300 PL, para solucionar sus problemas de corte en perfiles de madera y plástico con ancho de hasta 145 mm, sin desperdicio de tiempo y material.
                    <br>
                    <br> 
                    El equipo de Ingenieria de INMES desarrolló una estructura estable y confiable. Con menos vibración y menos ruido, por lo tanto el resultado solo podría ser un corte con altísima calidad.
                    <br>
                    <br>
                    Con un corte de calidad, Ud. Tiene además un producto más bonito, mucho mas productividad, porque evita el retrabajo.
                    <br>
                    <br>
                    Un equipo moderno, solo podría ser el mas seguro del mercado. Con el sistema de accionamiento de los discos de sierra por botoneras dobles, INMES juntó seguridad con productividad.
                </p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">PROLONGADOR DERECHO</p>
                    <li class="mb-2">Desarrollado para prolongar el lado derecho de la mesa de la Sierra Doble IM-300 PL, cuando la necesidad de cortar perfiles es de hasta 1951 mm. (Item opcional)</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">PROLONGADOR IZQUIERDO</p>
                    <li class="mb-2">Desarrollado para prolongar el lado izquierdo de la mesa de la Sierra Doble IM-300 PL, cuando la necesidad de cortar perfiles es de hasta 1951 mm.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">PROLONGADOR ADICIONAL DERECHO</p>
                    <li class="mb-2">Desarrollado para aumentar el prolongador, en el lado derecho, de la mesa de la Sierra Doble IM-300 PL, cuando la necesidad de cortar perfiles es de hasta 2946 mm. (Item opcional)</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">BOTONERA DOBLE</p>
                    <li class="mb-2">En la IM-300PL, usted acciona el presionador a través de las botoneras, garantizando que el perfil esté bien fijo, en la secuencia, automáticamente los discos de sierra bajan efectuando el corte.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">PRESIONADOR VERTICAL</p>
                    <li class="mb-2">El presionador vertical fue proyectado para garantizar mayor calidad de corte. Moldeandose automáticamente al perfil, el presionador también garantiza mayor seguridad para el operador.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">TOPE</p>
                    <li class="mb-2">El tope para el perfil, garantiza la repetibilidad de los cortes con precisión. Con un diseño innovador el tope es articulado, permitiendo que el operador use uno o mas topes, para cortar diferentes tamaños de perfiles, sin la necesidad de alterar la posición.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">TOPE FLIP-FLOP</p>
                    <li class="mb-2">El tope FLIP-FLOP es un sistema automatizado que garantiza la repetitividad de los cortes, con presición. Con diseño innovador, el tope es accionado neumáticamente, permitiendo que el operador corte la lateral y la cabecera del cuadro en secuencia, usando la misma varilla de moldura (item opcional)</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">EXAUSTOR INTERNO</p>
                    <li>La IM-300 P se puede equipar con un eficiente extractor y filtro. El exaustor se coloca en el interior de la máquina y el filtro en el exterior de ésta. Esta disposición garantiza menos espacio ocupado y mayor eficiencia de colección de polvo. (Item opcional) </li>
                </ul>
                <h4 class="H4 font-weight-bold">Caracteristicas</h4>
                <ul>
                    <li class="mb-2">Equipamiento compuesto por: Máquina IM-300 PL, disco de sierra de 300 mm de diámetro, para corte de madera, tope para perfil.</li>
                    <li class="mb-2">Posibilita la instalación de varios accesorios, tales como: Extractor interno (comprobar modelo), Prolongador derecho, Prolongador adicional derecho, Prolongador izquierdo, Parada flip-flop.</li>
                    <li class="mb-2">Puede cortar perfiles de madera y plástico (según la hoja de sierra).</li>
                    <li class="mb-2">Posee motor de inducción (monofásico o trifásico) de alta resistencia, bajo mantenimiento y bajo ruido;</li>
                    <li class="mb-2">Tapa frontal, permite fácil acceso para cambio de disco de sierra y posee visor amplio permitiendo óptima visualización durante el corte</li>
                    <li class="mb-2">Accionamiento simultáneo de los discos de sierra.</li>
                    <li class="mb-2">Regulación simultánea de la velocidad de avance de los discos de sierra.</li>
                    <li class="mb-2">Bancada de articulación con rodamientos cónicos, garantizando rigidez y estabilidad al conjunto.</li>
                    <li class="mb-2">Escala diagramada para la derecha e izquierda, que permite determinar la medida interna o externa de los perfiles sin ayuda de metro o wincha.</li>
                    <li class="mb-2">Acompaña tope para el perfil que garantiza la repetibilidad de los cortes.</li>
                    <li>Pintura epoxi, proporciona mejor acabado y mayor vida útil al equipo.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>