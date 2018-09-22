<?php

include ("connect_data.php");  // klase honetan gordetzen dira datu basearen datuak. erabiltzailea...

class libro_model extends libro_class {

    private $link;  // datu basera lotura - enlace a la bbdd
    private $list;  // datu basetik ekarritako datuak gordeko diren array-a 

    function getList() {
        return $this->list;
    }

    public function OpenConnect() {
        $konDat = new connect_data();
        try {
            $this->link = new mysqli($konDat->host, $konDat->userbbdd, $konDat->passbbdd, $konDat->ddbbname);
            // mysqli klaseko link objetua sortzen da dagokion konexio datuekin
            // se crea un nuevo objeto llamado link de la clase mysqli con los datos de conexión. 
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $this->link->set_charset("utf8"); // honek behartu egiten du aplikazio eta 
        //                  //databasearen artean UTF -8 erabiltzera datuak trukatzeko
    }

    public function CloseConnect() {
        mysqli_close($this->link);
    }

    public function setList() {
        $this->OpenConnect();  // konexio zabaldu  - abrir conexión
        $sql = "CALL spAllBooks()"; // SQL sententzia - sentencia SQL
        $this->list = array(); // objetuaren list atributua array bezala deklaratzen da - 
        //se declara como array el atributo list del objeto

        $result = $this->link->query($sql); // result-en ddbb-ari eskatutako informazio dena gordetzen da
        // se guarda en result toda la información solicitada a la bbdd

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $new = new libro_class();
            $new->setId($row['id']);
            $new->setTitulo($row['titulo']);
            $new->setAutor($row['autor']);
            $new->setNumPag($row['numPag']);
            array_push($this->list, $new);
        }
        mysqli_free_result($result);
        $this->CloseConnect();
    }

    public function insert() {

        $this->OpenConnect();  // konexio zabaldu  - abrir conexión
        $sql = "CALL spInsert('" . $this->getTitulo() . "','" . $this->getAutor() . "','" . $this->getNumPag() . "')"; // SQL sententzia - sentencia SQL

        $this->link->query($sql);

        $this->CloseConnect();
    }
    
     public function delete() {

        $this->OpenConnect();  // konexio zabaldu  - abrir conexión
        $sql = "CALL spDelete('" . $this->getId() . "')"; // SQL sententzia - sentencia SQL

        $this->link->query($sql);

        $this->CloseConnect();
    }

    public function update() {

        $this->OpenConnect();  // konexio zabaldu  - abrir conexión
        $sql = "CALL spSelectOneBook('" . $this->getId() . "')"; // SQL sententzia - sentencia SQL

         $this->list = array(); // objetuaren list atributua array bezala deklaratzen da - 
        //se declara como array el atributo list del objeto

        $result = $this->link->query($sql); // result-en ddbb-ari eskatutako informazio dena gordetzen da
        // se guarda en result toda la información solicitada a la bbdd

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $new = new libro_class();
            $new->setId($row['id']);
            $new->setTitulo($row['titulo']);
            $new->setAutor($row['autor']);
            $new->setNumPag($row['numPag']);
            array_push($this->list, $new);
        }
        mysqli_free_result($result);
        $this->CloseConnect();
    }
}
