<?php
include_once "Conexion.php";
$Query = $con->query("select nombre, ciudad, direccion, nit, n_habitaciones from hoteles");
$hoteles = $Query->fetchAll(PDO::FETCH_OBJ);

foreach($hoteles as $hotel){ ?>
            <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $hotel->nombre ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Ciudad: <?php echo $hotel->ciudad ?></h6>
                <p class="card-text">Dirección: <?php echo $hotel->direccion ?>, NIT: <?php echo $hotel->nit ?>, N. habitaciones: <?php echo $hotel->n_habitaciones ?>.
                <br>
                <strong>JUNIOR:</strong>
                <br>
                <strong>ESTANDAR:</strong>
                <br>
                <strong>SUITE:</strong>
                </p>
                <a href="#" class="card-link">Eliminar</a>
            </div>
            </div>
<?php } ?>

<!--
SELECT tipo_habitacion, nombre 
FROM habitaciones  
INNER JOIN hoteles
ON habitaciones.id_hotel = hoteles.id;
-->