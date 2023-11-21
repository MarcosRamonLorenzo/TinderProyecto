<?php

namespace App\Clases;

class Usuario
{

    private string $email;
    private string $password;
    private array $fotos;
    private string $nombre;
    private string $apellidos;
    private $sexo;
    private string $perfil;

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

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }

    public function getPerfil(): string
    {
        return $this->perfil;
    }

    public function setPerfil(string $perfil): void
    {
        $this->perfil = $perfil;
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






}