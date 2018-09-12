<?php
/**
 * css pour le RTE BO
 */

header("Content-type: text/css");

$css = file_get_contents('geek_unit.css');
//$css .= "\n" .file_get_contents('other.css');
//$css = str_replace('.wrapContentBg ', '', $css);
echo $css;
?>
body{
  padding : 20px;
  background:#fff;
}
