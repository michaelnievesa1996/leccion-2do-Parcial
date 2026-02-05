<?php

require_once __DIR__ . '/../bd/Conexion.php';
require_once __DIR__ . '/../modelo/perfil.php';

class PerfilDao {

    public function registrarperfil($perfil){
        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = 'INSERT INTO "perfil"
                ("nombre", "estado")
                VALUES (:nombre, :estado)';

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            ':nombre' => $perfil->nombre,
            ':apellidos' => $perfil->estado
        ]);
    }

    public function consultarPerfil(){
        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = 'SELECT "Id", "nombre", "estado"
                FROM "perfil"
                ORDER BY "Id"';

        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
