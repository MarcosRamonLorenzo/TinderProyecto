<?php
$titulo = "DWES Tinder";
$enlaces = [
    ['enlace' => '/', "descripcion" => 'Home'],
    ['enlace' => '/perfil', "descripcion" => 'Perfil'],
    ['enlace' => '/precios', 'descripcion' => 'Precios']

];
include_once __DIR__ . "/../plantilla/encabezado.php";

$diapositivas = [
    ['titulo' => 'DWES TInder',
        "subtitulos" => "Web de citas",
        'enlace' => '/registro',
        "desc_enlace" => "Registrate",
        'imagen' => 'https://images.pexels.com/photos/14989773/pexels-photo-14989773/free-photo-of-hombre-pareja-manos-amor.png'
    ],
    ['titulo' => 'Cuanto vale el amor?',
        "subtitulos" => "Somos tu cupido completo",
        "enlace" => '/precios',
        "desc_enlace" => "Precios",
        "imagen" => "https://www.24horas.cl/24horas/site/artic/20230503/imag/foto_0000000320230503165649/20-frases-de-amor-pareja.jpg"
    ],
    ['titulo' => 'Buscas el amor verdadero?',
        "subtitulos" => "Somos tu cupido completo",
        "enlace" => '/info',
        "desc_enlace" => "Información",
        "imagen" => "https://media.vogue.mx/photos/5c61d07741573a8f1ec64662/master/w_1600%2Cc_limit/GettyImages-760156091.jpg"
    ]

];


include_once __DIR__ . "/../plantilla/slider.php";


$personas=[
    "infoPrincipal"=>"La mejor web para encotrar el amor ha llegado ",
    "masInfo"=>"Personas de interes",
    "personas"=>[ [
        "nombre"=>"Fedrecio García",
        "imagen"=>"https://imgs.search.brave.com/AxTslmBUueJMWHxQb90ro76oan80xaFPXoELauhoniI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/ZnJlZS1waG90by9w/b3J0cmFpdC1tYW4t/bGF1Z2hpbmdfMjMt/MjE0ODg1OTQ0OC5q/cGc",
        "infoSecundaria"=>"Soy Fedrico y me gusta fumar porros en el parque."
    ],
        [
            "nombre"=>"Laura García",
            "imagen"=>"https://imgs.search.brave.com/b_zXjxwzUMmBaJOpHWmBqw3e0HxdsAuYI_LMJDCr43U/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTQ1/NzE2NjQ0Ni9waG90/by9wb3J0cmFpdC1v/Zi15b3VuZy13b21h/bi13YWxraW5nLXdp/dGgtaGVyLWZyaWVu/ZHMtYXQtc2thdGVi/b2FyZC1wYXJrLndl/YnA_Yj0xJnM9MTcw/NjY3YSZ3PTAmaz0y/MCZjPUZxVDdFcmNz/b1BGdXBGX0ZCenph/WXJsVWp4Ykp6V2xP/SnBBaWgzZkppbnM9",
            "infoSecundaria"=>"Soy Fedrico y me gusta coleccionar cubos de metal"
        ],
        [
            "nombre"=>"EL bicho",
            "imagen"=>"https://imgs.search.brave.com/2QppGQUuXjU4ckSuC6KUWXPRj4OpkZ8tVz7F6JRMzY8/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTQ0/MzE5MzMwNy9waG90/by9kb2hhLXFhdGFy/LWNyaXN0aWFuby1y/b25hbGRvLW9mLXBv/cnR1Z2FsLXJlYWN0/cy1kdXJpbmctdGhl/LXBvcnR1Z2FsLXBy/ZXNzLWNvbmZlcmVu/Y2Utb24uanBnP3M9/NjEyeDYxMiZ3PTAm/az0yMCZjPXlXQUZq/LVJUY3dxSmxlaUZG/M1lqVlYtY0lvMnhN/bklGRnkwQ1Z4Q2Vx/eEk9",
            "infoSecundaria"=>"Soy el focking Bicho me ha dejado  Georgina SIUUUUUUUU"
        ],
        [
            "nombre"=>"EL Cigala ",
            "imagen"=>"https://piks.eldesmarque.com/thumbs/o/1200/bin/malaga/stories/2016-17/MalagaCF/Varios_4/cigala.jpg",
            "infoSecundaria"=>"Simplemente el cigala que más quieres(Me ha dejao la pillica illo)."
        ]

    ]
];

include_once __DIR__."/../plantilla/cardsPersonas.php";

$mensajes= ["mensaje1"=>[
    "titulo"=>"Planes Premium",
    "info"=>"Consulata nuestro planes premium",
    "img"=>"https://imgs.search.brave.com/fl6QId2Y0HBUKCLNqpfEs9jBSXxPrflC3ZDVcw2sjUc/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/bGF2YW5ndWFyZGlh/LmNvbS9hbmRybzRh/bGwvaGVyby8yMDIz/LzEwL3BpY3R1cmUx/X3RpbmRlcl8xMC4y/MC4yMy5qcGc_d2lk/dGg9NzY4JmFzcGVj/dF9yYXRpbz0xNjo5/JmZvcm1hdD1ub3dl/YnA"

        ],
    "mensaje2"=>[
        "titulo"=>"Descarla nustra app para el movil",
        "info"=>"Descarga ya",
        "img"=>"https://imgs.search.brave.com/x93UofY_HCMJSbghEGxdV-5A8Hv1-aEdmx1tjE1FOYg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/Y29tcHV0ZXJob3ku/Y29tL3NpdGVzL25h/dmkuYXhlbHNwcmlu/Z2VyLmVzL3B1Ymxp/Yy9tZWRpYS9pbWFn/ZS8yMDIyLzAzL3Rp/bmRlci1hcHAtMjY1/ODg1NS5qcGc_dGY9/Mzg0MHg"


]
    ];


include_once __DIR__."/../plantilla/mensaje.php";


$footer = [
    "encabezadoFooter" => "Tinder Web App",
    "subtituloFooter" => "App Web Para conocer personas y realizar el focking coito.",
    "enlaces" => [
        ['enlace' => '/registro', "desc_enlace" => "Registrate",],
        ["enlace" => '/precios', "desc_enlace" => "Precios",],
        ["info" => '/info', "desc_enlace" => "Información",]
    ]


];

include_once __DIR__ . "/../plantilla/pie.php";

