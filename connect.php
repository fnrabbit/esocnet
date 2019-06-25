<?php

class esocnet_mysqli extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Ошибка подключения (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
}

$db = new esocnet_mysqli(ESN_MYSQL_SERVER, ESN_MYSQL_UNAME, ESN_MYSQL_PWRD, ESN_MYSQL_DB);

echo 'Соединение установлено... ' . $db->host_info . "\n";

$db->close();
