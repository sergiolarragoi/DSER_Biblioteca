<!DOCTYPE html>
<?php
include ("./model/libro_class.php");
include ("./model/libro_model.php");
include ("./controller/controller_index.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca</title>
    </head>
    <body>
        <h2>Títulos biblioteca</h2>
        <table name="tableBooks" border="1">
            <?php
            foreach ($listaLibros as $book) {
                ?>
                <tr>
                    <td><?php echo $book->getId(); ?></td>
                    <td><?php echo $book->getTitulo(); ?></td>
                    <td><?php echo $book->getAutor(); ?></td>
                    <td><?php echo $book->getnumPag(); ?></td>
                    <td><a href="./controller/controller_delete.php?id=<?php echo $book->getId();?>">Borrar</a></td>
                </tr>
<?php } ?>
        </table>

        <br>
        <h4>Add new book:</h4>
        <form action="./controller/controller_insert.php">
            Título:<br>
            <input type="text" name="titulo">
            <br>
            Autor:<br>
            <input type="text" name="autor">
            <br>
            Número de páginas:<br>
            <input type="text" name="numPag">
            <br><br>
            <input type="submit" value="Insert">
        </form> 

    </body>
</html>