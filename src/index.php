<?php

include_once "vendor/autoload.php";
//include_once "app/auxiliar/Router.php";
use Carbon\Carbon;
use App\Auxiliar\Router;
use App\Controladores\UsuarioControladores;


$router = new Router();

//Registrar rutas

//$router->get('/users',['User','getUsuario']);
/*
$router->get('/users',function(){
    echo "Me han pedido un listado de usuarios";
});*/

$router->get('/usuarios',[UsuarioControladores::class,'getTodosLosUsuarios']);
$router->get('/usuario',[UsuarioControladores::class,'getUsuario']);
$router->put('/usuario',[UsuarioControladores::class,'modificarUsuario']);
$router->get('/user',function(){
    echo "Me han pedido que guarde los datos de un usuario";
});
$router->post('/usuario',[UsuarioControladores::class,'guardarUsuario']);
$router->delete('/usuario',[UsuarioControladores::class,'borrarUsuario']);
$router->get('/api/usuarios',[UsuarioControladores::class,'mostrarUsuariosApi']);
$router->delete('/api/usuarios',[UsuarioControladores::class,'eliminarUsuarioAPI']);

//Rutas de forma visual.
$router->get('/',function (){
    include_once "./vistas/home.php";
});

$router->get('/terminos',function (){
    include_once "./vistas/terminos.php";
});
/*
echo "<pre>";
var_dump( $_SERVER);
echo "</pre>";
*/
$router->resolver($_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_URI']);

//var_dump($_SERVER);
