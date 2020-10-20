<?php 

define(DB_SERVER, 'localhost');
define(DB_USERNAME, 'root');
define(DB_PASSWORD, 'root');
define(DB_NAME, 'lalaku-cars');

$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$connect) {
	echo "Bazaga ulanmadi: ".mysql_error();
}