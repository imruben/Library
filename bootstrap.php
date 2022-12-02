<?php

//$dotenv=\Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();

use App\Container;
use App\Database\DB;
use App\Database\Connection;
//acces a servei configuració
Container::bind('config', require 'config.php');
Container::bind('database', new DB(Connection::make(Container::get('config'))));
