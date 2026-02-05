<?php 
include __DIR__ . '/../../controlador/AlumnoControlador.php';
include __DIR__ . '/../layout/header.php';

$alumnoControlador= new AlumnoControlador();

$alumnos= $alumnoControlador->consultarAlumnos();
?>

<div class="container mt-5">
    <h3>Consulta de alumnos</h3>

    <div class="d-flex justify-content-between aling-items-center mt-4">
        
         <a href="index.php?accion=menu" class="btn btn-success">Volver al menu</a>

    </div>

    <h3>Listado de alumnos</h3>
    <table class="table" >
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Fecha Nacimiento</th>
                <th>accion</th>
            </tr>
        </thead>
            <?php foreach($alumnos as $a): ?>
                <tr>
                    <td> <?= $a['Id'] ?> </td>
                    <td> <?= $a['Cedula'] ?> </td>
                    <td> <?= $a['Nombres'] ?> </td>
                    <td><?= $a['Apellidos'] ?></td>
                    <td><?= $a['Correo'] ?></td>
                    <td><?= $a['Telefono'] ?></td>
                    <td><?= $a['FechaNacimiento'] ?></td>
                    <td>
                        <a href="index.php?accion=editarAlumno&id=<?=$a['Id'] ?>">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <tbody>
            
        </tbody>
    </table>
</div>


<?php include __DIR__ . '/../layout/footer.php'?>