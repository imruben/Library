<?php

  namespace App\Database;

class QueryBuilder{
  private $query=[];
  private $fields=[];
  private $conections=[];
  private $from=[];
  private $stmt;
  protected \PDO $pdo;

  function __construct($pdo){
    $this->pdo=$pdo;
  }

  function select($fields):self{
  $sql = "SELECT ";
  $list=implode(',',$fields);
  $this->query[]=$sql.$list;
  return $this;
  }

  function from($table):self{
    $this->query[]=" FROM {$table} ";
    return $this;
  }

  function where(array $conditions):self{
    $k=array_keys($conditions);
    $v=array_values($conditions);
    $this->query[]=" WHERE {$k[0]}='{$v[0]}'";
    return $this;
  }
  function limit(int $n):self{
    $this->query[]=" LIMIT{$n}";
    return $this;
  }
  function __toString(){
    return join($this->query);
  }
  function exec($array=null){
    $sql=join($this->query);
    $this->stmt=$this->query($sql);
    $this->stmt=execute();
    return $this;
  }

  function fetch(){
    $rows=$this->stmt->fetchAll(\PDO::FETCH_OBJ);
    return $rows;
  }
  
  function selectAll(string $table, array $fields=null):array{
    if(is_array($fields)){
      $columns=implode(',',$fields);
    }else{
      
    }
  }
}

