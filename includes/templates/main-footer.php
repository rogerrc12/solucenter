
<footer class="main-footer">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="col-12">
                        <h2>Visítanos</h2>
                        <p>
                        <span class="direccion">
                            Av. Alisos Mz.G-1 lt. 6, 31 San Martin De Porres<br>
                            Lima - Perú
                        </span>
                        <br>
                        <span class="tel">
                            <strong>Contacto:</strong> 999 121 296 &bullet;<strong>Tlf:</strong> 325 5424 &bullet; 715 5817 <br>
                            <strong>Cel:</strong> 981 038 020 &bullet; 987 982 810 
                        </span>
                        <br>
                        <span class="mail">
                            <strong>Email:</strong> ventas@solucenterperu.com
                        </span>
                        </p>
                        <small class="copy">&copy; solucenterperu.com todos los derechos reservados</small>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="col-12">
                        <div class="social-iconos">
                            <a href="" class="mr-4">
                                <img src="img/icons/facebook_2.svg" alt="facebook">
                            </a>
                            <a href="" class="mr-4">
                                <img src="img/icons/instagram_2.svg" alt="instagram">
                            </a>
                            <a href="" class="mr-4">
                                <img src="img/icons/twitter_2.svg" alt="twitter">
                            </a>
                        </div>
                        <div class="boletin-footer">
                            <h3 class="H3 text-white mt-3">Subscribete a nuestro boletin</h3>
                            <p>y recibe los mejores anuncios y ofertas</p>
                            <form action="">
                            <input type="text" class="form-control mb-3" placeholder="correo electrónico">
                            <input type="submit" class="btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<div class="loader-ajax">
    <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>

<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
$basename = basename($_SERVER['PHP_SELF']);
$archivo = str_replace(".php", "", $basename);

if ($archivo === 'index') {
    echo '<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>';
}
if ($archivo === 'index' || $archivo === 'insumos' || $archivo === 'marqueria' || $archivo === 'melamine') {
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/14.0.6/js/intlTelInput.min.js"></script>';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/14.0.6/js/utils.js"></script>';
}
if ($archivo === 'marqueria' || $archivo === 'melamine') {
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>';
}
if ($archivo === 'index' || $archivo === 'insumos' || 
    $archivo === 'marqueria' || $archivo === 'melamine' || $archivo === 'contacto') {
    echo '<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>';
    echo '<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.min.js"></script>';
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.32.2/dist/sweetalert2.all.min.js"></script>';
}
if ($archivo === 'contacto') {
    echo '<script src="https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js"></script>';
    echo '<script src="js/contacto/contacto.js"></script>';
    echo '<script src="js/contacto/map.js"></script>';
}
?>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>