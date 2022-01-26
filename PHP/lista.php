<?php
include_once "Conexion.php";
$Query = $con->query("select nombre, ciudad, direccion, nit, n_habitaciones from hoteles");
$hoteles = $Query->fetchAll(PDO::FETCH_OBJ);

foreach($hoteles as $hotel){ ?>
        <h4><?php echo $hotel->nombre ?></h4>
        <h4><?php echo $hotel->ciudad ?></h4>
        <h4><?php echo $hotel->direccion ?></h4>
        <h4><?php echo $hotel->nit ?></h4>
        <h4><?php echo $hotel->n_habitaciones ?></h4>
<?php } ?>

<!--
SELECT tipo_habitacion, nombre 
FROM habitaciones  
INNER JOIN hoteles
ON habitaciones.id_hotel = hoteles.id;
-->