<?php

require_once '../model/Producto.php';

$producto = new Producto();

header("Content-type: application/json; charset=utf-8");

if(isset($_GET['operation'])){
  switch($_GET['operation']){
    case 'obtenerProductos':
      echo json_encode($producto->obtenerProductos());
      break;    
  }
}

if(isset($_POST['operation'])){
  switch ($_POST['operation']) {
    case 'registrarProducto':
      $datosEnviar = [
        "nombre"  =>  $_POST["nombre"],
        "tipo"    =>  $_POST["tipo"],
        "precio"  =>  $_POST["precio"]
      ];
      $registrado = $producto->registrarProducto($datosEnviar);
      echo json_encode(["registrado" => $registrado]);
      break;        
  }
}