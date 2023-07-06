<?php

$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');

if(!$db) {
  echo "Error de conexión de Base de Datos";
  exit;
};

?>