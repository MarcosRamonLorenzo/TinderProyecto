<?php


namespace App\Controladores;

use App\Clases\Usuario;
use App\Modelos\UsuarioModelo;
use Rakit\Validation\Validator;

class UsuarioControladores
{

   public UsuarioModelo $modelo;
    public function getUsuario(int $id)
    {
        $usuario=new Usuario();
        $usuario->setEmail($id);
        $usuario->setNombre("Laura");
        $usuario->setApellidos("Pausini");

    }

    public function getTodosLosUsuarios()
    {
    echo "Estoy en todos los usuarios";
    }

    public function modificarUsuario(int $id)
    {
        $input = file_get_contents('php://input');
        $datos = json_decode($input,true);

        echo "Voy a modificar el usuario $id con sus datos:";
        echo "<pre>";
        var_dump($datos);
        echo "</pre>";
    }

    /*public static function guardarUsuario()
    {
        $validator = new Validator();
        $validation =  $validator->make($_POST,[
            'nombre'=>'required',
            'correo'=>'required|email',
            'apellidos'=>'required'

        ]);

        $validation->validate();

        if (!$validation->fails()) {
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setEmail($_POST['correo']);
            $usuario->setApellidos($_POST['apellidos']);


            UsuarioModelo::guardarUsuarioBD($usuario);
        }
    }*/

    public function guardarUsuario(){
        $usuario = new Usuario();
        $usuario->setNombre($_POST['nombre']);
        $usuario->setApellidos($_POST['apellidos']);
        $usuario->setEmail($_POST['correo']);

        UsuarioModelo::guardarUsuarioBD($usuario);

    }

    public function borrarUsuarioApi(string $emailUsuario)
    {
      if (UsuarioModelo::borrarUsuarioBD($emailUsuario)){
          echo "Borrado Correcto";
      }else{
          echo "No se ha podido borrar el usuario";
      }
    }

    //Metodos API
    public function mostrarUsuariosApi(string $email)
    {
       $arrayUsuario = UsuarioModelo::cargarUsuarioBD($email);
       $usuario=Usuario::crearUsuariodeArray($arrayUsuario);
       echo json_encode($usuario->jsonSerialize());
    }


}