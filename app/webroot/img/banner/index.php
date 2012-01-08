<?php
function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    $start  = $length * -1;
    return (substr($haystack, $start) === $needle);
}
function isImage($str)
{
    return endsWith($str,'.png') || endsWith($str,'.jpg');
}
$banners = array();
$handler = opendir(dirname(__FILE__));
while ($file = readdir($handler)) {
      if ($file != "." && $file != ".." && isImage($file)) {
        $banners[] = $file;
      }
}
header("Location: ".$banners[array_rand ($banners)]);