<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        <?php
            include("conexion.php");
        ?>
        <h1>Formulario</h1>
        <ul>
            <li>
                <a href="index.php">Inicio.</a>
            </li>
            <li>
                <a href="formulario.php">Formulario.</a>
            </li>
        </ul>
        <form method="POST" action="store.php">
            <label for="tdisco">Título del Disco:</label>
            <input type="text" name="tdisco" required>
            <br>
            <label for="artista">Artista:</label>
            <input type="text" name="artista" required>
            <br>
            <label for="genero">Género:</label>
            <select name="genero" required>
                <option value=""></option>
                <option value="Pop">Pop</option>
                <option value="Jazz">Jazz</option>
                <option value="Rock">Rock</option>
                <option value="Blues">Blues</option>
                <option value="Country">Country</option>
                <option value="Electrónica">Electrónica</option>
                <option value="Hip-Hop">Hip-Hop</option>
                <option value="Reggaeton">Reggaeton</option>
                <option value="Folk">Folk</option>
                <option value="Indie">Indie</option>
                <option value="Metal">Metal</option>
            </select>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
