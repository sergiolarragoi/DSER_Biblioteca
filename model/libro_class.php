<?php

//namespace model;
class libro_class {

    protected $id;
    protected $titulo;
    protected $autor;
    protected $numPag;

    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getNumPag() {
        return $this->numPag;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setNumPag($numPag) {
        $this->numPag = $numPag;
    }

}
