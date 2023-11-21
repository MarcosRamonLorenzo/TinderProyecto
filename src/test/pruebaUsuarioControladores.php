<?php
include_once "../vendor/autoload.php";
use App\Controladores\UsuarioControladores;

$controladores = new UsuarioControladores();

$controladores->getTodosLosUsuarios();
