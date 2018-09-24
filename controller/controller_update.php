<?php

include_once ("../model/libro_class.php");
include_once ("../model/libro_model.php");


$libro = new libro_model();

$id = filter_input(INPUT_GET, "id");
$libro->setId($id);

$titulo = filter_input(INPUT_GET, "titulo");
$libro->setTitulo($titulo);

$autor = filter_input(INPUT_GET, "autor");
$libro->setAutor($autor);

$numPag = filter_input(INPUT_GET, "numPag");
$libro->setNumPag($numPag);

$libro->update();



header('Location: ../index.php');
