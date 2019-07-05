<?php

  $SQL_1 = '
  CREATE TABLE `esn_users_table` (
    `id` INT(15) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `login` VARCHAR(15) NOT NULL,
    `type` VARCHAR(10) NOT NULL,
    `avatar_url` VARCHAR(100),
    PRIMARY KEY (`id`)
  );';
