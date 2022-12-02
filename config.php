<?php

// return[
//   'dbuser'=>$_ENV['DB_USER'],
//   'dbpasword'=>$_ENV['DB_PASSWORD'],
//   'dbname'=>$_ENV['DB_NAME'],
//   'connection'=>$_ENV['DB_DRIVER'].':host='.$_ENV['DB_HOST'],
//   'options'=>[
//     \PDO::ATTR_ERRMODE=>\PDO::ERRMODE_WARNING
//   ]
// ];

return [
  'dbuser' => 'oNz9SOICUh',
  'dbpassword' => '59lnGDWfC3',
  'dbname' => 'oNz9SOICUh',
  'connection' => 'mysql:host=remotemysql.com',
  'options' => [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING
  ]
];
