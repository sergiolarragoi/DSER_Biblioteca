<?php

include_once ("../model/libro_class.php");
include_once ("../model/libro_model.php");


$libro = new libro_model();

$titulo = filter_input(INPUT_GET, "titulo");
$libro->setTitulo($titulo);

$autor = filter_input(INPUT_GET, "autor");
$libro->setAutor($autor);

$numPag = filter_input(INPUT_GET, "numPag");
$libro->setNumPag($numPag);

$libro->insert();



header('Location: ../index.php');
