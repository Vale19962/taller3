
<?php

//paso 1
include "config/conexion.php";

//paso 2
$sql = "SELECT cod,categoria FROM categorias WHERE 1";

//Paso 3
foreach($dbh->query($sql) as $row)
{
  $cod = $row[0];
  $categoria = $row[1];
    print "
    <option value='".$cod."'>".$categoria."</option>
    ";
}

?>