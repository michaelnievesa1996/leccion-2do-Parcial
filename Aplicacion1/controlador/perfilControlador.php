<?php
require_once __DIR__ . '/../dao/perfilDao.php';
require_once __DIR__ . '/../modelo/perfil.php';

class PerfilControlador {

    public function guardarPerfil() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nombre = trim($_POST['nombre']);

            if ($nombre === '') {
                header("Location: index.php?accion=registrarPerfil&error=1");
                exit;
            }

            $perfil = new Perfil();
            $perfil->nombre = $nombre;
            $perfil->estado = true;

            $perfilDao = new PerfilDao();
            $resultado = $perfilDao->registrarPerfil($perfil);

            if ($resultado) {
                header('Location: index.php?accion=menu');
                exit;
            } else {
                echo "Error al registrar perfil";
            }
        }
    }

    public function consultarPerfil() {
        $perfilDao = new PerfilDao();
        return $perfilDao->consultarPerfil();
    }
}