<?php

function obtener_servicios() {
  try {
    // Importar las Credenciales de Datos
    require('database.php');

    // Consulta SQL
    $sql = "SELECT * FROM servicios;";

    // Realizar la Consulta
    $consulta = mysqli_query($db, $sql);

    return $consulta;

    /*
    // Acceder a los Resultados
    echo "<pre>";
    var_dump( mysqli_fetch_assoc($consulta) );
    echo "</pre>";

    // Cerrar la Conexión (Opcional)
    $resultado = mysqli_close($db);
    echo $resultado;   // devuelve: 1 si cerró, 0 si hay error.

    */

  } catch (\Throwable $th) {
    var_dump($th);
  };
};

?>