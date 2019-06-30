<?php

  // длинные названия :/
  class esocnet_mysql_wrapper
  {
    // string, bool
    function execute_query($query, $bigdata = TRUE) {
        $connection = new mysqli(ESN_MYSQL_SRVER, ESN_MYSQL_UNAME, ESN_MYSQL_PWORD, ESN_MYSQL_DBASE);

        if ($connection->connect_errno) {
            return FALSE;
            exit();
        }

        switch ($bigdata) {
          case FALSE:
            $result = $connection->query($query);
            //$result->close();
            break;

          case TRUE:
            $result = $connection->query($query, MYSQLI_USE_RESULT);
            //$result->close();
            break;

          default:
            $result = $connection->query($query, MYSQLI_USE_RESULT);
            //$result->close();
            break;
        }

        return $result;
        $result->close();
        $connection->close();
    }
  }
