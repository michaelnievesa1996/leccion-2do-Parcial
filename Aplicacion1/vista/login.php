<?php include 'layout/header.php'?>

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-4 ">

            <h4>Inciar Sesion</h4>

            <form action="index.php?accion=procesarLogin" method="post">
                <div class="mb-3">
                    <label class="form-label" for="usuario">Usuario:</label>
                    <input class="form-control" type="text" name="usuario">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="clave">Clave:</label>
                    <input class="form-control" type="password" name="clave">
                </div>
                
                <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-success">Ingresar</button>
                </div>
            </form>

            <div class="text-center mb-3">
                <a href="index.php?accion=inicio" class="btn btn-outline-secondary">Volver al inicio</a>
            </div>
        </div>

  
</div>

</div>


<?php include 'layout/footer.php'?>