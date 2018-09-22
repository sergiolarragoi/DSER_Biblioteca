<?php

include_once ("../model/libro_class.php");
include_once ("../model/libro_model.php");


$libro = new libro_model();

$id = filter_input(INPUT_GET, "id");
$libro->setId($id);



$libro->delete();



header('Location: ../update_form.php');


