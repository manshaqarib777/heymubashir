<?php 
$strJsonFileContents = file_get_contents("location.json");
// echo "<pre>";
// print_r(json_decode($strJsonFileContents));
// die();
$name = array();
foreach (json_decode($strJsonFileContents) as $key => $value) {
  $name[]=$value->name;
}
echo "<pre>";
print_r(json_encode(array_values($name)));
die();
 ?>