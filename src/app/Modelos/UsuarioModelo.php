<?php

namespace App\Modelos;

use App\Clases\Usuario;

class UsuarioModelo
{
    private string $url;
    private string $nombreTabla;

    public static function guardarUsuarioBD(Usuario $user)
    {
    $arrayUsuarios[]=$user;
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