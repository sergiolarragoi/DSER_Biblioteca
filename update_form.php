<!DOCTYPE html>
<?php
include ("./model/libro_class.php");
include ("./model/libro_model.php");
include ("./controller/controller_select.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca</title>
    </head>
    <body>
        <h4>Add new book:</h4>
        <form action="./controller/controller_update.php">
            
            <input type="hidden" name="id" value="<?php echo $libro->getId(); ?>">
            Título:<br>
            <input type="text" name="titulo" value="<?php echo $libro->getTitulo(); ?>">
            <br>
            Autor:<br>
            <input type="text" name="autor" value="<?php echo $libro->getAutor(); ?>">
            <br>
            Número de páginas:<br>
            <input type="text" name="numPag" value="<?php echo $libro->getnumPag(); ?>">
            <br><br>
            <input type="submit" value="Update">
        </form> 

    </body>
</html>