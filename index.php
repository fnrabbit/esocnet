<?php

  // index.php (единая точка входа)
  // пул страниц: main, guestbook, controlpanel, register, passwordchange, admincpa, ..

  session_start();
  include_once './config.php';
  include './SQLQueries.php';
  //include './mysql.php';

  /*$sql_create = '
  CREATE TABLE `esn_users_table` (
    `id` INT(15) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `login` VARCHAR(15) NOT NULL,
    `type` VARCHAR(10) NOT NULL,
    `avatar_url` VARCHAR(100),
    PRIMARY KEY (`id`)
  );
  ';

  $sql_ins = '
  INSERT INTO esn_users_table VALUES (1, "test@email.net", "foo", "user", "");
  ';

  /*echo esocnet_mysql_wrapper::get_single_data('id', 'esocnet_users_table', 'login = "foo"');
  */
/*
  try {
    # MySQL через PDO_MYSQL
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  }

  catch(PDOException $e) {
    die($e->getMessage());
  }
*/

  $host = ESN_MYSQL_SRVER;
  $dbname = ESN_MYSQL_DBASE;
  $user = ESN_MYSQL_UNAME;
  $pass = ESN_MYSQL_PWORD;

  $PDO_Drivers = PDO::getAvailableDrivers();
  //echo var_dump($PDO_Drivers);
  if ( array_search('mysql', $PDO_Drivers) === FALSE )
  {
    die("Error: MySQL PDO Driver is not detected.");
  }

  try {
    $DBHandle = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $DBHandle->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $DBHandle->prepare($SQL_1)->execute();
  }

  catch(PDOException $e) {
    die("Oh no... Error: " . $e->getMessage());
    //file_put_contents('../PDOErrors.txt', $e->getMessage(), FILE_APPEND);
  }
