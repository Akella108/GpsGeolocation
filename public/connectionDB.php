<?php
$host = 'localhost';
$name = 'root';
$password = '';
$DBname = 'GpsGeolocatorDB';

$mysqli = new mysqli($host, $name, $password, $DBname);
if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
}
