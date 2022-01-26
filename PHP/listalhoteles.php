<?php
include_once "Conexion.php";
$Query = $con->query("select nombre from hoteles");
$hoteles = $Query->fetchAll(PDO::FETCH_OBJ);
foreach($hoteles as $hotel){ ?>
        <option value="<?php echo $hotel->nombre ?>"><?php echo $hotel->nombre ?></option>
<?php } ?>