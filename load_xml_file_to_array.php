<?php
require 'vendor/autoload.php';

use pixweber\SimpleXMLtoArray\SimpleXMLtoArray;

$array = SimpleXMLtoArray::load_xml_file_to_array('data/food-menu.xml');

echo '<pre>';
var_dump($array);
echo '</pre>';