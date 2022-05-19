<?php

//Leemos el JSON
$alumnos = file_get_contents("http://1929.168.200.66/Cliente/data.json");
$json_alumnos = json_decode($alumnos, true);
print_r($json_alumnos);
foreach($json_alumnos as $alumnos) {

    echo $alumnos["nombre"]."<br>";

}
?>