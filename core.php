<?php

$dreamcastPage = $_GET['dreamcast'];
$neogeoPage = $_GET['neogeo'];
$saturnPage = $_GET['saturn'];

if (isset($dreamcastPage)) {

    $file = 'assets\JSON\listeDC.json';
// mettre le contenu du fichier dans une variable
    $data = file_get_contents($file);
// décoder le flux JSON
    $obj = json_decode($data);
} elseif (isset($neogeoPage)) {

    $file = 'assets\JSON\listeNeoGeo.json';
// mettre le contenu du fichier dans une variable
    $data = file_get_contents($file);
// décoder le flux JSON
    $obj = json_decode($data);
} elseif (isset($saturnPage)) {

    $file = 'assets\JSON\listesaturn.json';
// mettre le contenu du fichier dans une variable
    $data = file_get_contents($file);
// décoder le flux JSON
    $obj = json_decode($data);
}
