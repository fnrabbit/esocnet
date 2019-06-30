<?php

  // index.php (единая точка входа)
  // пул страниц: main, guestbook, controlpanel, register, passwordchange, admincpa, ..

  session_start();
  include_once './config.php';
  include './mysql.php';

  $sql = '
  CREATE TABLE `esn_users_table` (
    `id` INT(15) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `login` VARCHAR(15) NOT NULL,
    `type` VARCHAR(10) NOT NULL,
    `avatar_url` VARCHAR(50),
    PRIMARY KEY (`id`)
  );
  ';

  echo var_dump(esocnet_mysql_wrapper::execute_query($sql, TRUE));
