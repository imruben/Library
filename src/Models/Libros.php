<?php

  namespace App\Models;

  class Libros implements iModel{
    private string $isbn;
    private int $idAutor;
    private string $titulo;
    private string $edicion;

    public function setIsbn($isbn){
      $this->isbn = $isbn;
    }
    public function setIdAutor($idAutor){
      $this->idAutor = $idAutor;
    }
    public function setTitulo($titulo){
      $this->titulo = $titulo;
    }
    public function setEdicion($edicion){
      $this->edicion = $edicion;
    }

    public function select($camps=[]){
      $this->service('db')->select($camps);
    }

    public function insert($camps=[],$values=[]){
      $this->service('db')->select($camps);
    }

    //select
    public function getIsbn(){
      return $this->isbn;
    }
    public function getIdAutor(){
      return $this->idAutor;
    }
    public function getTitulo(){
      return $this->titulo;
    }
    public function getEdicion(){
      return $this->edicion;
    }
  }