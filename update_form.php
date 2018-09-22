<!DOCTYPE html>
<?php
include ("./model/libro_class.php");
include ("./model/libro_model.php");
include ("./controller/controller_update.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca</title>
    </head>
    <body>
        <h4>Add new book:</h4>
        <form action="./controller/controller_insert.php">
            Título:<br>
            <input type="text" name="titulo" value="<?php echo $book->getTitulo(); ?>">
            <br>
            Autor:<br>
            <input type="text" name="autor" value="<?php echo $book->getAutor(); ?>">
            <br>
            Número de páginas:<br>
            <input type="text" name="numPag" value="<?php echo $book->getnumPag(); ?>">
            <br><br>
            <input type="submit" value="Update">
        </form> 

    </body>
</html>