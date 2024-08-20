<?php

//$url_peticion = "/admin/categorias/edit/10";
$url_peticion = "/admin/categorias/edit/10";

$url_ruta = "/admin/categorias/edit/{codigo}";

//expresiones regulares [a-z0-9]

$patron = "#^" . "/admin/categorias/edit/([A-Za-z0-9]+)" . "$#";

$ruta_en_partes = explode("/", $url_ruta);
echo "<pre>";
var_dump($ruta_en_partes);
echo "</pre>";

foreach ($ruta_en_partes as $indice => $item) {
    if(substr($item, 0, 1) == "{"){
        $ruta_en_partes[$indice] = "([A-Za-z0-9]+)";
    }
}

echo "<pre>";
var_dump($ruta_en_partes);
echo "</pre>";

$ruta_unida = implode("/", $ruta_en_partes);
echo $ruta_unida . "<br>";
$ruta_patron = "#^" . $ruta_unida . "$#";
echo $url_peticion . "<br>";

if(preg_match($ruta_patron, $url_peticion, $coincidencia)){
    echo "Si coinciden";
    echo "<pre>";
    var_dump($coincidencia);
    echo "</pre>";
}else{
    echo "No coinciden";
}
