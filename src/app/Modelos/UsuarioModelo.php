<?php

namespace App\Modelos;

use App\Clases\Usuario;
use PDO;

class UsuarioModelo
{
    private PDO $conexion;
    private string $nombreTabla;

    public static function guardarUsuarioBD(Usuario $user)
    {
        $conexion = new PDO('mysql:dbname=tinder;host=mysql','pringao','passwordpringao');
        $conexion->setAttribute(PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

        $sql="INSERT INTO usuarios VALUES ()";
    }

    public static function devolverUsuariosBD(string $email):array
    {
    $usuario = new Usuario();
    $usuario->setEmail($email);
    $usuario->setNombre('Marcos');
    $usuario2 = new Usuario();
    $usuario2->setEmail($email);
    $usuario2->setNombre('Alberto');
    return [$usuario,$usuario2];
    }

    public static function modificarUsuarioBD(Usuario $user){

    }

    public static function borrarUsuarioBD(Usuario $user){

    }

    public static function crearUsuarioBD(Usuario $user){

    }





}