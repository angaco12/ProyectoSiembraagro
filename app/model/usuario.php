<?php

class usuario
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function getUser($user){
        $this->db->query('SELECT * FROM usuarios WHERE usuario = :usuario' );
        $this->db->bind(':usuario', $user);
        return $this->db->register();
    }

    public function getUserFeed($user){
        $this->db->query('SELECT * FROM usuarios U INNER JOIN perfil P ON U.idusuario = P.idUsuario WHERE usuario = :usuario' );
        $this->db->bind(':usuario', $user);
        return $this->db->register();
    }

    public function getPerfil($idusuario){
        $this->db->query('SELECT * FROM perfil WHERE idUsuario = :id');
        $this->db->bind(':id', $idusuario);
        return $this->db->register();
    }

    public function verifiquePassword($dataUser, $contrasena){

       if(password_verify($contrasena, $dataUser->contrasena)){
            return true;
       }else
         return false;
        
    }

    public function verifiqueUser($dataUser){
        $this->db->query('SELECT usuario FROM usuarios WHERE usuario = :usuario');
        $this->db->bind(':usuario', $dataUser['usuario']);
        $this->db->register();
        if ($this->db->rowCount()){
            return false;
        }else{
            return true;
        }
    }

    public function register($dataUser){
       $this->db->query('INSERT INTO usuarios (idPrivilegio, correo, usuario, contrasena) VALUES (:privilegio, :correo, :usuario, :contrasena)');
       $this->db->bind(':privilegio', $dataUser['privilegio']);
       $this->db->bind(':correo', $dataUser['email']);
       $this->db->bind(':usuario', $dataUser['usuario']);
       $this->db->bind(':contrasena', $dataUser['contrasena']);
    //    $this->db->bind(':telefono', $dataUser['telefono']);
    //    $this->db->bind(':direccion', $dataUser['direccion']);
       if ($this->db->execute()){
        return true;
       }else{
       return false;
       }
    }

    public function insertarPerfil($datos){
        $this->db->query('INSERT INTO perfil (idUsuario, fotoPerfil, nombreCompleto, telefono, direccion) VALUES (:id , :rutaFoto, :nombre, :telefono, :direccion)');
        $this->db->bind(':id', $datos['idusuario']);
        $this->db->bind(':rutaFoto', $datos['ruta']);
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':telefono', $datos['telefono']);
        $this->db->bind(':direccion', $datos['direccion']);
        
        if ($this->db->execute()){
            return true;
           }else{
           return false;
           }
    }

    public function getAllUsuarios(){
        $this->db->query('SELECT U.idusuario, U.usuario, P.fotoPerfil, P.nombreCompleto FROM usuarios U 
        INNER JOIN perfil P ON P.idUsuario = U.idusuario');
        return $this->db->registers();
    }

    public function getCantidadUsuarios(){
        $this->db->query('SELECT idusuario FROM usuarios');
        $this->db->execute();
        return $this->db->rowCount();
    }
}