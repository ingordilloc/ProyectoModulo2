<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      LibrosEdiTech
    </a>
  </div>

</nav>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=nosotros">¿Quienes Somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=contacto">Contacto</a>
        </li>
        <?php
        if (!empty($_SESSION['id']) && ($_SESSION['rol'] )) {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=libros">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=registrar">Nuevo Libro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=libroPrestado">Libros Prestados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=logout">Cerrar Sesion</a>
        </li>
        <?php  } else {  ?>
          <li class="nav-item">
          <a class="nav-link" href="index.php?action=libreria">Libros</a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?action=login ">Inicia Sesion</a></li>
            <li><a class="dropdown-item" href="index.php?action=crearUsuario">Registrate</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>