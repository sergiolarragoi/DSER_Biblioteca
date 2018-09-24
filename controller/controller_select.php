<?php



$id = filter_input(INPUT_GET, "id");
$libro = new libro_model();


$libro->setId($id);



$libro->select();






