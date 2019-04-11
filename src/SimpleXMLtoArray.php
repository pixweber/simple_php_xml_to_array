<?php
namespace pixweber\SimpleXMLtoArray;

/**
 * Class SimpleXMLtoArray
 * @package Pixweber/SimpleXMLtoArray
 * @author : The Hau lE @Pixweber
 */
class SimpleXMLtoArray {
    public static function load_xml_file_to_array($xml_file_path) {
        $xml_object = simplexml_load_file($xml_file_path, null, LIBXML_NOCDATA);
        $json = json_encode($xml_object);
        $array = json_decode($json, true);
        return $array;
    }
}