<?php

namespace App\Database;

class DB
{
  protected \PDO $pdo;

  //funciones de la db

  function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
}
