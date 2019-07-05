<?php

  $SQL_1 = '
  CREATE TABLE `esn_users_table` (
    `id` INT(15) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `login` VARCHAR(15) NOT NULL,
    `type` VARCHAR(10) NOT NULL,
    `pword` VARCHAR(100) NOT NULL,
    `avatar_url` VARCHAR(100),
    PRIMARY KEY (`id`)
  );';

  $SQL_2 = '
  INSERT INTO esn_users_table VALUES (1, "test@email.net", "foo", "user", "");
  ';

  $SQL_3 = '
  SELECT id, login, email, type, avatar_url FROM esn_users_table WHERE id = 1;
  ';
