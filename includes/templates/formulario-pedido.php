<section class="seccion-pedidos" id="seccion-pedidos">
    <div class="container py-5">
      <h2 class="H1 text-center">¿Interesado en nuestros productos?</h2>
      <p class="H3 text-center mb-5">Solicita nuestra asesoria</p>
      <form action="" id="formularioPedido">
        <div class="form-row">
          <div class="col-12 col-md-6">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 col-md-6">
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input type="email" id="email" class="form-control" name="email">
            </div>
          </div>
        </div>
        <div class="form-row mt-2">
          <div class="col-12 col-md-6" id="tipo_producto">
            <label class="d-block mb-2">Selecciona el tipo de producto</label>
            <label class="d-block">Máquinas</label>
            <div class="form-check form-check-inline">
              <input type="radio" id="melamine" name="tipo_producto" value="melamine" class="form-check-input">
              <label class="form-check-label" for="melamine">Para Melamine</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" id="marqueria" name="tipo_producto" value="marqueria" class="form-check-input">
              <label class="form-check-label" for="marqueria">Para Marqueria</label>
            </div>
            <!-- Maquinas Radio Button -->
            <label class="d-block">Muebles</label>
            <div class="form-check form-check-inline">
              <input type="radio" id="oficina" name="tipo_producto" value="oficina" class="form-check-input">
              <label class="form-check-label" for="oficina">Para Oficína</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" id="comercio" name="tipo_producto" value="comercio" class="form-check-input">
              <label class="form-check-label" for="comercio">Para Comercio</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" id="inmobiliaria" name="tipo_producto" value="inmobiliaria" class="form-check-input">
              <label class="form-check-label" for="inmobiliaria">Para Inmobiliaria</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" id="hogar" name="tipo_producto" value="hogar" class="form-check-input">
              <label class="form-check-label" for="hogar">Para Hogar</label>
            </div>
            <!-- Mueblería -->
          </div>
          <div class="col-12 col-md-6">
              <label for="necesidades" class="mb-3">Describa sus necesidades</label>
              <textarea class="form-control" name="necesidades" id="necesidades" rows="3" ></textarea>
          </div>
        </div>
        <div class="col-12 text-center pt-5">
          <input type="submit" class="btn d-inline-block" value="enviar">
        </div>
      </form>
    </div>
  </section>
  <!-- Formulario de pedido -->