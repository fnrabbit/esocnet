<?php

  switch ($_GET['hash']) {
    case 'md5':
      echo md5($_GET['input']);
      break;

    case 'sha512':
      echo hash('SHA512', $_GET['input']);
      break;

    default:
      echo hash('SHA512', $_GET['input']);
      break;
  }
