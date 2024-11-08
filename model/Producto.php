<?php

require_once 'ExecQuery.php';

class Producto extends ExecQuery
{

  public function obtenerProductos(): array
  {
    try {
      $sp = parent::execQ("SELECT * FROM productos");
      $sp->execute();
      return $sp->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function registrarProducto($params = []): bool
  {
    try {
      $status = false;
      $cmd = parent::execQ("INSERT INTO productos (nombre, tipo, precio) values (?,?,?)");
      $status = $cmd->execute(
        array(
          $params['nombre'],
          $params['tipo'],
          $params['precio']
        )
      );
      return $status;
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  
}
