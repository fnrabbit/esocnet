<?php

  // index.php (единая точка входа)
  // пул страниц: main, guestbook, controlpanel, register, passwordchange, admincpa, ..

  session_start();
  include_once './config.php';
  include './SQLQueries.php';

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

    //$DBHandle->prepare($SQL_3)->execute();
    $s = $DBHandle->query($SQL_3);
    while ($r = $s->fetch())
    {
        $usr_array = array(
          'email' = $r['email'],
          'login' = $r['login'],
          'type' = $r['type'],
          'avatar_url' = $r['avatar_url']
        );
    }
  }

  catch(PDOException $e) {
    file_put_contents('./PDOErrors.txt', $e->getMessage(), FILE_APPEND);
    die("Oh no... Error: " . $e->getMessage());
  }
