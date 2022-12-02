<?php

  namespace App\Models;

  interface iModel{
    public function select();
    public function insert();
    public function save();
  }