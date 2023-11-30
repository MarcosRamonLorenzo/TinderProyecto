<?php

namespace App\Modelos;

use App\Clases\Usuario;
use PDO;

class UsuarioModelo
{
    private string $nombreTabla;

    private PDO $conexion;
    public static function guardarUsuarioBD(Usuario $user)
    {
        $conexion = new \PDO('mysql:dbname=tinder;host=mysql', 'pringao', 'passwordpringao');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO usuario VALUES(?,?,?)";

        $sentenciaPreparada = $conexion->prepare($sql);

        $sentenciaPreparada->bindValue(1, $user->getEmail());
        $sentenciaPreparada->bindValue(2, $user->getNombre());
        $sentenciaPreparada->bindValue(3, $user->getApellidos());

        $datos = $sentenciaPreparada->execute();
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

    public static function borrarUsuarioBD(string $emailUsuario):bool{
        $conexion = new \PDO('mysql:dbname=tinder;host=mysql', 'pringao', 'passwordpringao');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM usuario WHERE email=:email";

        $sentenciaPreparada = $conexion->prepare($sql);

        $sentenciaPreparada->bindValue('email',$emailUsuario);

      if ( $sentenciaPreparada->execute()){
          return true;
      }else {
          return false;
      };
    }

    public static function crearUsuarioBD(Usuario $user){

    }

    public static function cargarUsuarioBD(string $emailUsuario):array{

        $conexion = new \PDO('mysql:dbname=tinder;host=mysql', 'pringao', 'passwordpringao');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM usuario WHERE email=:email";

        $sentenciaPreparada = $conexion->prepare($sql);

        $sentenciaPreparada->bindValue('email',$emailUsuario);
        $sentenciaPreparada->execute();
        $datosUsuario=$sentenciaPreparada->fetch(PDO::FETCH_ASSOC);


        return  $datosUsuario;
    }



}