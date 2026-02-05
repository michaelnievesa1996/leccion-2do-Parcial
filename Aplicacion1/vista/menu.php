<?php include 'layout/header.php' ?>

<div class="container mt-5">

    <!-- Bienvenida -->
    <div class="row mb-4">
        <div class="col text-center">
            <h3 class="mb-1">
                Bienvenido,
                <strong>
                    <?= isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Usuario' ?>
                </strong>
            </h3>
            <p class="text-muted">Menú principal del sistema</p>

            <a href="index.php?accion=logout" class="btn btn-sm btn-danger">
                <i class="bi bi-box-arrow-right"></i> Cerrar sesión
            </a>
        </div>
    </div>

    <!-- Menú -->
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="accordion shadow-sm" id="menuPrincipal">

                <!-- ALUMNOS -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#alumnos"
                            aria-expanded="true">

                            <i class="bi bi-mortarboard-fill me-2"></i> Alumnos
                        </button>
                    </h2>

                    <div id="alumnos" class="accordion-collapse collapse show"
                         data-bs-parent="#menuPrincipal">

                        <div class="accordion-body d-flex gap-2 flex-wrap">
                            <a href="index.php?accion=registrarAlumno" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-person-plus"></i> Registrar
                            </a>
                            <a href="index.php?accion=consultarAlumnos" class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-search"></i> Consultar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PERFILES -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#perfiles">

                            <i class="bi bi-shield-lock-fill me-2"></i> Perfiles
                        </button>
                    </h2>

                    <div id="perfiles" class="accordion-collapse collapse"
                         data-bs-parent="#menuPrincipal">

                        <div class="accordion-body d-flex gap-2 flex-wrap">
                            <a href="index.php?accion=registrarPerfil" class="btn btn-outline-success btn-sm">
                                <i class="bi bi-plus-circle"></i> Registrar perfil
                            </a>

                            <a href="index.php?accion=agregarPerfil" class="btn btn-outline-warning btn-sm">
                                <i class="bi bi-person-badge"></i> Asignar perfil
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

<?php include 'layout/footer.php' ?>


