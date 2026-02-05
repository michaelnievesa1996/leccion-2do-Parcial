<?php

require_once __DIR__ . '/../bd/Conexion.php';
require_once __DIR__ . '/../modelo/Alumno.php';

class AlumnoDao {

    public function registrarAlumno($alumno){
        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = 'INSERT INTO "Alumnos"
                ("Cedula", "Nombres", "Apellidos", "Correo", "Telefono", "FechaNacimiento")
                VALUES (:cedula, :nombres, :apellidos, :correo, :telefono, :fechaNacimiento)';

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            ':cedula' => $alumno->cedula,
            ':nombres' => $alumno->nombre,
            ':apellidos' => $alumno->apellido,
            ':correo' => $alumno->correo,
            ':telefono' => $alumno->telefono,
            ':fechaNacimiento' => $alumno->fechaNacimiento
        ]);
    }

    public function consultarAlumnos(){
        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = 'SELECT "Id", "Cedula", "Nombres", "Apellidos", "Correo", "Telefono", "FechaNacimiento"
                FROM "Alumnos"
                ORDER BY "Id"';

        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
