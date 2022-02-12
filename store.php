<?php
include('conexion.php');

if(count($_POST) > 0) {
    $tdisco = $_POST['tdisco'];
    $artista = $_POST['artista'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO discos (titulo, artista, genero)
    VALUES ('$tdisco', '$artista', '$genero')";

        // use exec() because no results are returned
    $conn->exec($sql);

    header('Location: index.php');
}
?>