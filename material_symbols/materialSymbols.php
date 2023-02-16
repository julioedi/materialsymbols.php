<?php

//create a global variable to get current path Directory
$MaterialSymbolsDir = __DIR__;

/**
* @param mixed $data
*
* @param string in array $id; id name of the icon
*
* @param string in array $variant; "outlined" || "rounded" || "sharp"
*
* @param bool in array $filled; by default icons are lined, if need filled icon mark as true
*
* @param int in array $size; // render size, by default is 24
*
* @param string in array $color; "currentcolor" will inherit container font color
*
* @return string <svg/>
*/

function MaterialSymbols($data = null){
  global $MaterialSymbolsDir;
  $data = $data ? $data : array();
  $data = (is_string($data)) ? array("id" => $data) : $data;
  $default = array(
    "id" => "circle",
    "variant" => "outlined",
    "filled" => false,
    "size" => 24,
    "color" => "currentcolor",
  );
  $values = array(
    ...$default,
    ...$data
  );
  extract($values);

  $wrap = "<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"{$size}\" viewBox=\"0 0 48 48\" width=\"{$size}\" fill=\"{$color}\">%s</svg>";
  $inner = '';

  $file = file_exists("$MaterialSymbolsDir/icons/${id}.json") ? file_get_contents("$MaterialSymbolsDir/icons/{$id}.json") :  file_get_contents("$MaterialSymbolsDir/icons/{$default['id']}.json");
  $file = json_decode($file,true);

  $variant = ($filled === true) ? "{$variant}-filled" : $variant;
  $paths = ( isset($file[$variant]) ) ? $file[$variant] : $file[$default['variant']];
  foreach ($paths as $path) {

    $string = "";
    foreach ($path as $key => $value) {
      $string .= ' '. $key . '="' . $value . '"';
    }
    $inner .= "<path{$string}/>";
  }
  return sprintf($wrap,$inner);
}
