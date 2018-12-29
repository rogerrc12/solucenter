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
                <p>Una novedad en el mercado del mueble, garantizando Más Flexibilidad, Economía, Productividad y la Calidad que usted ya conoce!
                    <br><br> 
                    La fabricación de muebles a medida, requiere equipos profesionales y cada vez mas flexibles. El acceso a los mas variados formatos de MDF y Melamina, esto exige máquinas versatiles, por eso INMES, desarrollo la IC-2003 DRP Electronic, que cuenta con un rápido sistema de cambio de calderín, proporcionandole a Ud., amigo carpintero, flexibilidad en el día a día.
                    <br><br>
                    Con un moderno panel, la IC-2003 DRP Electronic entra en modo de espera bajando la temperatura del pegamento automáticamente, después de 15 minutos si la máquina no está siendo utilizada, evitando el recalentamiento del pegamento y el consumo de energía.
                    <br><br>
                    La nueva IC-2003 DRP Electrónic está mas rápida, ahora Ud. Puede enchapar con velócidad de 12 m/min aumentando de esta forma la productividad de su carpintería.
                    <br><br>
                    La IC-2003 DRP Electrónic, pegamento refila y pule. Con panel moderno e inteligente, además de proporcionar la economía de energia, aumeta la vida útil de los componentes.
                </p>
                <a href="../../melamine.php#seccion-pedidos" class="btn d-inline-block mb-4">solicitar asesoria</a>
                <h4 class="H4 font-weight-bold">Funciones</h4>
                <ul>
                    <p class="text-uppercase font-weight-bold mb-1">CAMBIO DEL CALDERIN</p>
                    <li class="mb-2">En la enchapadora IC-2003 DRP Plus Electronic, es posible cambiar el calderín de forma práctica y rápida, garantizando mayor productividad en el uso de varios tipos de adhesivos. (Segundo calderín es opcional)</li>

                    <p class="text-uppercase font-weight-bold mb-1">PRE-CALENTADOR</p>
                    <li class="mb-2">El precalentador calienta la pieza, para que ésta al entrar en contacto con el adhesivo no lo enfríe y elimine la humedad en la pieza, aumentando la calidad del enchapado.</li>

                    <p class="text-uppercase font-weight-bold mb-1">RODILLOS PRESIONADORES</p>
                    <li class="mb-2">Con accionamiento neumático para la regulación de la fuerza, los rodillos de presionadores garantizan una presión uniforme en el canto, garantizando un enchapado perfecto.</li>

                    <p class="text-uppercase font-weight-bold mb-1">PANEL DE CONTROL</p>
                    <li class="mb-2">Con un panel de fácil acceso y operación, es posible encender y apagar los grupos, regular el tamaño de la sobra de cinta, regular la temperatura del precalentador y del pegamento, acceder a la pantalla de mantenimiento y controlar el tiempo de trabajo.</li>

                    <p class="text-uppercase font-weight-bold mb-1">REFILADOR</p>
                    <li class="mb-2">Con un sistema de regulación práctica, el conjunto refilador de la IC-2003 DRP Plus Electronic está equipado con 2 fresas accionadas por 2 motores de 1 HP cada uno, trabajando a 12.000 rpm, proporcionando un acabado superior.</li>

                    <p class="text-uppercase font-weight-bold mb-1">PULIDOR</p>
                    <li class="mb-2">El conjunto pulidor proporciona un acabado fino, retirando los restos de adhesivo y lustrando el conjunto pieza / canto.</li>

                    <p class="text-uppercase font-weight-bold mb-1">CAMBIO DE CANTO</p>
                    <li class="mb-2">En la canteadora IC-2003 RP Plus Electrónic. Cambiar el grosor del canto es muy fácil. Puede utilizar un pedazo de cinta con el grosor deseado, como referencia para el ajuste.</li>
                    
                    <p class="text-uppercase font-weight-bold mb-1">REGULACION DEL ESPESOR</p>
                    <li class="mb-2">La regulación de la altura de pegado es muy simple. Basta con medir el grosor de la pieza que se va a enchapar y a través de la palanca de ajuste encontrar la medida correspondiente. Este proceso tarda sólo unos segundos.</li>

                    <p class="text-uppercase font-weight-bold mb-1">PANEL DE REGULACION</p>
                    <li class="mb-2">La fuerza de los rodillos presionadores del canto y del rodillo arrastrador de la cinta pueden ajustarse según sea necesario.</li>
                </ul>
            </section>
        </div>
    </div>
  </article>
  <?php
    include_once('../../includes/templates/producto-footer.php');
  ?>