<?php

$datos = [
    ['nombre' => 'Pepe1',
    'apellido'  => 'Trueno1',
    'email' => 'pepe1@gmail.com',
    'direccion' => [
            'Pais' => 'Venezuela1',
            'Ciudad' => 'Valecia'
             ]
    ],
    ['nombre' => 'Pepe2',
    'apellido'  => 'Trueno2',
    'email' => 'pepe2@gmail.com',
    'direccion' => [
            'Pais' => 'Venezuela2',
            'Ciudad' => 'Valecia2'
         ]
    ],
    ['nombre' => 'Pepe3',
    'apellido'  => 'Trueno3',
    'email' => 'pepe3@gmail.com',
    'direccion' => [
            'Pais' => 'Venezuela3',
            'Ciudad' => 'Valecia3'
         ]
    ]
];

echo $datos[2]['direccion']['Ciudad'];
echo "<br>";
echo "<hr>";

foreach($datos as $item){
    echo $item['nombre'] . "<br>";
    echo $item['apellido'] . "<br>";
    echo $item['email'] . "<br>";
    echo $item['direccion']['Ciudad'] . "<br>";
    echo "<hr>";
}
