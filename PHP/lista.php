<?php
include_once "Conexion.php";
$Query = $con->query("select id, nombre, ciudad, direccion, nit, n_habitaciones from hoteles");
$hoteles = $Query->fetchAll(PDO::FETCH_OBJ);

foreach($hoteles as $hotel){ 

    $Query2 = $con->query("SELECT COUNT(nombre) FROM habitaciones INNER JOIN hoteles ON habitaciones.id_hotel = hoteles.id WHERE id_hotel =".$hotel->id);
    $n2 =  $Query2->fetchColumn();

    $Query3 = $con->query("SELECT COUNT(nombre) FROM habitaciones INNER JOIN hoteles ON habitaciones.id_hotel = hoteles.id WHERE id_hotel =".$hotel->id." AND tipo_habitacion = 'Junior'");
    $n3 =  $Query3->fetchColumn();

    $Query4 = $con->query("SELECT COUNT(nombre) FROM habitaciones INNER JOIN hoteles ON habitaciones.id_hotel = hoteles.id WHERE id_hotel =".$hotel->id." AND tipo_habitacion = 'Estándar'");
    $n4 =  $Query4->fetchColumn();

    $Query5 = $con->query("SELECT COUNT(nombre) FROM habitaciones INNER JOIN hoteles ON habitaciones.id_hotel = hoteles.id WHERE id_hotel =".$hotel->id." AND tipo_habitacion = 'Suite'");
    $n5 =  $Query5->fetchColumn();


            ?>
            <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $hotel->nombre ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted">Ciudad: <?php echo $hotel->ciudad ?> | N. habitaciones: <?php echo $hotel->n_habitaciones ?>.</h6>
                <p class="card-text">Dirección: <?php echo $hotel->direccion ?> | NIT: <?php echo $hotel->nit ?>. 
                <br>
                <strong>TOTAL: <?php echo $n2 ?></strong>
                <br>
                <strong>JUNIOR: <?php echo $n3 ?></strong>
                <br>
                <strong>ESTANDAR: <?php echo $n4 ?></strong>
                <br>
                <strong>SUITE: <?php echo $n5 ?></strong>
                </p>
                <a class="card-link" href="<?php echo "../PHP/eliminar.php?id=" . $hotel->id?>">Eliminar</a>
            </div>
            </div>
<?php } ?>

<!--
SELECT COUNT(nombre)
FROM habitaciones  
INNER JOIN hoteles
ON habitaciones.id_hotel = hoteles.id
WHERE id_hotel = 5 ;
-->