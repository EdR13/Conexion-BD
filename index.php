<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="icon" type="image/x-icon" href="imgs/cds.png" />
    </head>
    <?php
        include("conexion.php");
    ?>
    <body>
        <h1>Inicio.</h1>
        <ul>
            <li>
                <a href="index.php">Inicio.</a>
            </li>
            <li>
                <a href="formulario.php">Formulario.</a>
            </li>
        </ul>

        <?php
            $sql = 'SELECT * FROM discos';
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            if($stmt->rowCount() == 0)
            {
                echo "
                <br>
                <h2>Aún no has agregado ningún disco :c.</h2>
                <br>";
            } 
            else {
                echo "
                <br>
                <h2>Estos son los discos que has agregado.</h2>
                <br>";
    
                echo "<table border='1'>
                <tr>
                <th>Título</th>
                <th>Artista</th>
                <th>Género</th>
                </tr>";
    
                foreach ($stmt->fetchAll() as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['titulo'] . "</td>";
                    echo "<td>" . $row['artista'] . "</td>"; 
                    echo "<td>" . $row['genero'] . "</td>";  
                    echo "</tr>";
                }
                echo "</table>";
            }

        ?>

    </body>
</html>
