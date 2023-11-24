<?php
$titulo="DWES Tinder";
$enlaces =[
    ['enlace'=>'/',"descripcion"=>'Home'],
    ['enlace'=>'/perfil',"descripcion"=>'Perfil'],
    ['enlace'=>'/precios','descripcion'=>'Precios']

];
include_once __DIR__."/../plantilla/encabezado.php";

$diapositivas = [
    ['titulo'=>'DWES TInder',
        "subtitulos"=>"Web de citas",
        'enlace'=>'/registro',
        "desc_enlace"=>"Registrate",
        'imagen'=>'https://images.pexels.com/photos/14989773/pexels-photo-14989773/free-photo-of-hombre-pareja-manos-amor.png'
    ],
    ['titulo'=>'Cuanto vale el amor?',
    "subtitulos"=>"Somos tu cupido completo",
    "enlace"=>'/precios',
    "desc_enlace"=>"Precios",
    "imagen"=>"https://www.24horas.cl/24horas/site/artic/20230503/imag/foto_0000000320230503165649/20-frases-de-amor-pareja.jpg"
    ],
    ['titulo'=>'Buscas el amor verdadero?',
    "subtitulos"=>"Somos tu cupido completo",
    "enlace"=>'/precios',
    "desc_enlace"=>"Precios",
    "imagen"=>"https://media.vogue.mx/photos/5c61d07741573a8f1ec64662/master/w_1600%2Cc_limit/GettyImages-760156091.jpg"
]

];

$footer=[
    "encabezadoFooter"=>"Tinder Web App",
    "subtituloFooter"=>"App Web Para conocer personas y realizar el focking coito.",
    "enlaces"=>[

    ]


];
include_once __DIR__."/../plantilla/slider.php";
$datosMensaje=['encabezado'=>'Somos los p**** amos',


];

//include_once __DIR__."/../plantilla/mensaje.php";

include_once __DIR__."/../plantilla/pie.php";

