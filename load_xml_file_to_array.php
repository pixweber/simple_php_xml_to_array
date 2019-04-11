<?php
$array = load_xml_file_to_array('data/food-menu.xml');

echo '<pre>';
var_dump($array);
echo '</pre>';


function load_xml_file_to_array($xml_file_path) {
    $xml_object = simplexml_load_file($xml_file_path, null, LIBXML_NOCDATA);
    $json = json_encode($xml_object);
    $array = json_decode($json, true);
    return $array;
}