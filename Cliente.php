php_json.php 
<?php
// data stored in array
$array = Array (
    "0" => Array (
        "id" => "01"
        "Nombre" => "Imanol"
        "Apellido" => "Arreondo"
        "Edad" => "20"
        "Grado" => "2"
    ),
    "1" => Array (
        "id" => "02"
        "Nombre" => "Alexis"
        "Apellido" => "Acevedo"
        "Edad" => "19"
        "Grado" => "2"
    ), 
    "2" => Array (
        "id" => "03"
        "Nombre" => "Valente"
        "Apellido" => "Sonoran"
        "Edad" => "20"
        "Grado" => "2"
    ),
);
$json = json_encode($array);
$bytes = file_put_contents("myfile.json",$json);