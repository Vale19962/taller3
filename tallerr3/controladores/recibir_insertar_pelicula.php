<script src="../js/sweetalert2@10.js"></script>
.
<?php
//paso 1: importar la libreria
require "../config/conexion.php";

//paso 2 almacenar las variables

$nombre= $_POST["nombre"];
$categoria= $_POST["categoria"];
$fecha= $_POST["fecha"];


//paso 3 armar el sql en una variable

$sql_insertar = "INSERT INTO cine(pelicula, categoria, estreno, fecha_sys) VALUES ('".$nombre."','".$categoria."','".$fecha."',now())";
echo $sql_insertar;
//paso 4: enviar a la BD

if ($dbh->query($sql_insertar))
{


    echo '<script>
    Swal.fire({
      title: "insertando",
      text: "Insertado correctamente",
      icon: "success",
      showConfirmButton: false
    });
    setTimeout(function(){
      window.location.href = "../registrar_pelicula.php";
    }, 3000); // Redirecciona después de 3 segundos
  </script>';

}
else
{

    echo '<script>
    Swal.fire({
      title: "error",
      text: "Error insertando",
      icon: "error",
      showConfirmButton: false
    });
    setTimeout(function(){
      window.location.href = "../registrar_pelicula.php";
    }, 3000); // Redirecciona después de 3 segundos
  </script>';

}

?>