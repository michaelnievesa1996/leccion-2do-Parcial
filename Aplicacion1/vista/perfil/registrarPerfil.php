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
            <label class="form-label">Nombres</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">estado</label>
            <select name="opcion">
                <option>-- Seleccione --</option>
                <option name="estado">Activo</option>
                <option>name="estado"</option>
            </select>
            
        </div>

        

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>