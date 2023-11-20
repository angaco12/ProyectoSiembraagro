<?php

class Perfil extends Controller{
    public function __construct() {

        $this->perfil = $this->model('perfilUsuario');
        $this->usuario = $this->model('usuario');
    }

    public function index($user) {

        if (isset($_SESSION['logueado'])) {

            $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);
            $datosUsuario = $this->usuario->getUser($user);

            $datos = [
                'perfil' => $datosPerfil,
                'usuario' => $datosUsuario
            ];
            $this->view('pages/perfil/perfil', $datos);
    }
   }
   public function cambiarImagen(){

    $carpeta = "C:/xampp/htdocs/siembraagro/public/img/imagenesPerfil/";
    opendir($carpeta);
    $rutaImagen = 'img/imagenesPerfil/' . $_FILES['imagen']['name'];
    $ruta= $carpeta . $_FILES['imagen']['name'];
    copy($_FILES['imagen']['tmp_name'], $ruta);

    $datos = [
        'idusuario' => trim($_POST['id_user']),
        'ruta' => $rutaImagen
     ];

    $imagenActual = $this->usuario->getPerfil($datos['idusuario']);
    
    unlink('C:/xampp/htdocs/Siembraagro/public/' . $imagenActual->fotoPerfil);
  
    if($this->perfil->editarFotoPerfil($datos)){
       redirection('/home');
    }
    else{
       echo 'el perfil no se ha guardado';
    }
   }
}