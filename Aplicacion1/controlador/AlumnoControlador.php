<?php
require_once __DIR__ . '/../dao/AlumnoDao.php';
require_once __DIR__ . '/../modelo/Alumno.php';

class AlumnoControlador {

    public function consultarAlumnos(){
        $alumnoDao = new AlumnoDao();
        return $alumnoDao->consultarAlumnos();
    }

    public function guardarAlumno(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $alumno = new Alumno();
            $alumno->cedula           = $_POST['cedula'];
            $alumno->nombre           = $_POST['nombres'];
            $alumno->apellido         = $_POST['apellidos'];
            $alumno->correo           = $_POST['correo'];
            $alumno->telefono         = $_POST['telefono'];
            $alumno->fechaNacimiento  = $_POST['fechaNacimiento'];

            $dao = new AlumnoDao();
            $resultado = $dao->registrarAlumno($alumno);

            if ($resultado) {
                header('Location: index.php?accion=consultarAlumnos');
                exit;
            } else {
                echo "Error al registrar alumno";
            }
        }
    }
}
