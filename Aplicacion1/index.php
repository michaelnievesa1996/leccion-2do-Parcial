<?php
session_start();

require_once 'controlador/UsuarioControlador.php';
require_once 'controlador/AlumnoControlador.php';
require_once 'controlador/perfilControlador.php';

$opcion = $_GET['accion'] ?? 'inicio';

$usuarioCtrl = new UsuarioControlador();
$alumnoCtrl  = new AlumnoControlador();

switch ($opcion) {

    case 'login':
        include 'vista/login.php';
        break;

    case 'procesarLogin':
        $usuarioCtrl->procesarLogin($_POST['usuario'], $_POST['clave']);
        break;

    case 'logout':
        $usuarioCtrl->logout();
        break;

    case 'registrarAlumno':
        include 'vista/alumno/registrar.php';
        break;
    case 'registrarPerfil':
        include 'vista/perfil/registrarPerfil.php';
        break;

    case 'guardarAlumno':
        $alumnoCtrl->guardarAlumno();
        break;

    case 'consultarAlumnos':
        include 'vista/alumno/consultar.php';
        break;

    case 'editarAlumno':
        include 'vista/alumno/editar.php';
        break;

    case 'menu':
        include 'vista/menu.php';
        break;

    default:
        include 'vista/inicio.php';
        break;
}
