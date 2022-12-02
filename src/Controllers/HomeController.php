<?php

namespace App\Controllers;

final class HomeController
{

  function __construct()
  {
  }
  public function index()
  {
    //Primer obtenir dades
    // $titulo = "Biblioteca de ardillas";
    // return view('home', compact('dades'));
    return view('home');
  }
  public function prueba()
  {
    echo "Prueba - HomeController";
  }
  public function error()
  {
    echo "error";
  }
}
