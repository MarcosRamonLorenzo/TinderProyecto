<?php

namespace App\Clases;

class Usuario implements \JsonSerializable
{

    private ?string $email;
    private ?string $nombre;
    private ?string $apellidos;

    private ?array $perfil;


    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getFotos(): array
    {
        return $this->fotos;
    }

    public function setFotos(array $fotos): void
    {
        $this->fotos = $fotos;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }






    private function setAtributoUsuarioArrayPerfil(string $clave , $valor){
        $this->perfil[$clave]=$valor;
    }

    public function getEdad(): int
    {
        $fechaActual = new DateTime();
        $fechaNac = $this->fecha_nac;

        $añoActual = (int)$fechaActual->format('Y');
        $añoNac = (int)$fechaNac->format('Y');

        $mesActual = (int)$fechaActual->format('m');
        $mesNac = (int)$fechaNac->format('m');

        $diaActual = (int)$fechaActual->format('d');
        $diaNac = (int)$fechaNac->format('d');


        $edad = $añoActual - $añoNac;

        // Comprobar si ya ha pasado el cumpleaños de este año
        if ($mesActual < $mesNac || ($mesActual == $mesNac && $diaActual < $diaNac)) {
            $edad-=1;
        }

        return $edad;
    }
    public function addAtributoPerfil(string $clave,  $valor){
        $this->perfil[$clave]=$valor;
    }


    public function getPorcentajePerfilCompletado():float{

        $atributos=count($this->perfil);
        $porcentaje=($atributos*100)/13;
        return $porcentaje;
    }




    public static function convertirUsuarioEnJSON(Usuario $usuario):string
    {

        return json_encode($usuario);


    }

    public static function crearUsuariodeArray(array $datosUsuario):Usuario{
            $usuario = new Usuario();
            $usuario->setEmail($datosUsuario['email']??"sincorreo@gmail.com");
            $usuario->setNombre($datosUsuario['nombre']??"Jane");
            $usuario->setApellidos($datosUsuario['apellidos']??"Doe");

            return $usuario;
    }


    public function jsonSerialize():mixed
    {
        $arraySalida = [];
        if (isset($this->email)){
            $arraySalida['email']=$this->email;
        }
        if (isset($this->nombre)){
            $arraySalida['nombre']=$this->nombre;
        }
        if (isset($this->apellidos)){
            $arraySalida['apellidos']=$this->apellidos;
        }

        return $arraySalida;
    }
}