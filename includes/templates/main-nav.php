<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
    <img src="img/logo_nav.svg" alt="logo solucenter" width="100px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if ($archivo === '' || $archivo === 'index') {echo 'active';} ?>">
        <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item <?php if ($archivo === 'nosotros') {echo 'active';} ?>">
        <a class="nav-link" href="nosotros.php">Nosotros</a>
        </li>
        <li class="nav-item dropdown <?php if ($archivo === 'insumos' || $archivo === 'marqueria' || $archivo === 'melamine') {echo 'active';} ?>">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">productos</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="melamine.php">Maquinas para Melamine</a></li>
            <li><a class="dropdown-item" href="marqueria.php">Maquinas para Marqueria</a></li>
            <li><a class="dropdown-item" href="insumos.php">Insumos</a></li>
            </ul>
        </li>

        <li class="nav-item <?php if ($archivo === 'contacto') {echo 'active';} ?>">
        <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
    </ul>
    </div>
</nav>