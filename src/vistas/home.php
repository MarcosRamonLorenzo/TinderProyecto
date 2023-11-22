<?php
$titulo="DWES Tinder";
$enlaces =[
    ['enlace'=>'/',"descripcion"=>'Home','actual'=>true],
    ['enlace'=>'/perfil',"descripcion"=>'Perfil'],
    ['enlace'=>'/precios','descripcion'=>'Precios']

];
include_once __DIR__."/../plantilla/encabezado.php";

$diapositivas = [
    ['titulo'=>'DWES TInder',
        "subtitulos"=>"Web de citas",
        'enlace'=>'/registro',
        "desc_enlace"=>"Registrate",
        'imagen'=>'https://s.yimg.com/ny/api/res/1.2/EGvjNdWgpp49LvwRSuwUiA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQyNw--/https://media.zenfs.com/es/levelup_525/8519770150f34e6909f7d58dc5bdaf2b'
    ],
    ['titulo'=>'Cuanto vale el amor?',
    "subtitulos"=>"Somos tu cupido completo",
    "enlace"=>'/precios',
    "desc_enlace"=>"Precios",
    "imagen"=>"https://store-images.s-microsoft.com/image/apps.59889.13682780537640100.576cf9e6-eb8e-4a72-84ca-3f229c8fab47.e6e1dfd5-3a47-4689-be49-ebd619fc1fa9?q=90&w=480&h=270"
    ]
];
include_once __DIR__."/../plantilla/slider.php";
$datosMensaje=['encabezado'=>'Somos los p**** amos',



];

include_once __DIR__."/../plantilla/mensaje.php";

include_once __DIR__."/../plantilla/pie.php";

