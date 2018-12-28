<?php
  include_once('includes/templates/main-header.php');
?>
  <section class="contacto-bg d-flex align-items-center justify-content-center">
    <h1 class="H1">Contacto</h1>
  </section>
  <nav class="nav-description container py-4">
    <a href="index.html" class="text-uppercase">inicio</a> /
    <span href="" class="text-uppercase">contacto</span>
  </nav>
  <article class="contacto-form">
    <div class="container">
        <h2 class="H1">Queremos ayudarte</h2>
        <p>Nos encantaría guiarte en el proceso de compra o simplemente despejar tus dudas, así que déjanos tus datos y será un gusto atenderte.</p>
        <h4 class="H3 my-3">Por favor, complete el questionario</h4>
        <form method="POST" autocomplete="off" id="contactForm" action="http://localhost:8888/proyectos/solucenter-api/contacto.php">
          <input class="form-control" name="nombre" type="text" placeholder="NOMBRE Y APELLIDO" required>
          <input class="form-control" name="email" type="email" placeholder="CORREO ELECTRONICO" required>
          <input class="form-control" name="direccion" type="text" placeholder="DIRECCIÓN" required>
          <input class="form-control" name="asunto" type="text" placeholder="ASUNTO" required>
          <textarea class="form-control" name="mensaje" rows="4" placeholder="MENSAJE" required></textarea>
          <small class="d-block mb-4">El mensaje debe ser de al menos 25 caracteres</small>
          <input type="submit" value="enviar" class="btn">
        </form>
    </div>
  </article>
  <!-- Queremos Conocerte -->

  <div class="container my-5">
    <div id='map' style='width: 100%; height: 450px;'></div>
  </div>
  <!-- Mapa -->
<?php
  include_once('includes/templates/whatsapp.php');
  include_once('includes/templates/main-footer.php');
?>