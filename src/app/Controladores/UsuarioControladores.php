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

    public static function guardarUsuario()
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
    }

    public function borrarUsuario(int $idUsuario)
    {
        echo "A mamar el usuario $idUsuario";
    }

    //Metodos API
    public function mostrarUsuariosApi()
    {
        echo "{
            correo:marcosrmaon.alu@ieapcomomolla.es
            nombre:marcos
            apellidos:Ramñon lorenzo        
        
        }";
    }

    public function eliminarUsuarioAPI(int $idUsuario){
        echo "Has elminado a $idUsuario mediante la api ";
    }
}