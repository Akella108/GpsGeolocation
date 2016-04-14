<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

require_once 'connectionDB.php';

function sendMsg($id, $msg) {
  echo "id: $id" . PHP_EOL;
  echo "data: $msg" . PHP_EOL;
  echo PHP_EOL;
  ob_flush();
  flush();
}

$proverka = "";
while(true) {
  global $proverka;
  $selectIdCoordinates = "select * from coordinates order by id_coordinates desc limit 1";
  $resultLatLng = $mysqli->query("$selectIdCoordinates")->fetch_assoc();
  $resultLatLngSplit = $resultLatLng['lat'] . " " . $resultLatLng['lng'];
  $serverTime = time();
  if($resultLatLngSplit != $proverka) {
    sendMsg($serverTime, $resultLatLngSplit);
    $proverka = $resultLatLngSplit;
  }
  sleep(5);
}

?>