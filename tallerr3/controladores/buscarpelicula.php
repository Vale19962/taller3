
<?php
include "config/conexion.php";

$nombre = $_POST["nombre"];

$sql = "SELECT pelicula,categoria,estreno
FROM policine
WHERE nombrep like '%".$nombrep."%' ";

foreach($dbh->query($sql)as $row)
{
   
    $nombrep = $row['pelicula'];
    $categoria =$row['categoria'];
    $fechae = $row['fechae'];
   

    print "
    <td>".$nombre."</td>
    <td>".$categoria."</td>
    <td>".$estreno."</td>
  </tr>
    ";

}

?>