<?php
require_once __DIR__ . '/../dao/UsuarioDao.php';

class UsuarioControlador{
    public function procesarLogin($usuario, $clave){
        $usuarioDao= new UsuarioDao();

        $user=$usuarioDao->autenticar($usuario, $clave);

        if ($user){
            session_start();
            $_SESSION['usuario']= $user->usuario;
            header("Location: index.php?accion=menu");
        }else{
            header("Location: index.php?accion=login&error=1");
        }
        exit;

    }


    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php?accion=inicio");
        exit;
    }


}
  
?>