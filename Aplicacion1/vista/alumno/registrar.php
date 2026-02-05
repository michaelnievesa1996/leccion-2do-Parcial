<?php require_once __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5">
    <h2 class="mb-3">Registro de perfil de usuario</h2>

    <form method="POST" action="index.php?accion=guardarAlumno">

        <div class="mb-3">
            <select name="opcion">
                <option>-- Seleccionar tipo de perfil --</option>
                <option>Administrador</option>
                <option>secretario/a</option>
                <option>Jefe de bodega</option>
            </select>
            
        </div>

        <div class="mb-3">
            <label class="form-label">Cédula</label>
            <input type="text" name="cedula" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nombres</label>
            <input type="text" name="nombres" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input type="text" name="apellidos" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de nacimiento</label>
            <input type="date" name="fechaNacimiento" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>
