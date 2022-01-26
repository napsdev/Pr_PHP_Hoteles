<?php

if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "Conexion.php";


$Query2 = $con->prepare("DELETE FROM habitaciones WHERE id_hotel = ?;");
$Res2 = $Query2->execute([$id]);

$Query = $con->prepare("DELETE FROM hoteles WHERE id = ?;");
$Res = $Query->execute([$id]);

if ($Res === true || $Res === true) {
    echo "<script>
        alert('Eliminador correctamente!');
        window.location.href='../VIEW/Inicio.php';
        </script>";
} else {
    echo "<script>
        alert('Algo salio mal!');
        window.location.href='../VIEW/Inicio.php';
        </script>";
}