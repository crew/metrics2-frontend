<?php

header("Content-Type: application/json");
$windowsquery = file_get_contents("http://missilecommand:5984/lab_machine_data/_design/linux/_view/tty?group_level=1");
$linuxtty =     file_get_contents("http://missilecommand:5984/lab_machine_data/_design/linux/_view/tty?group_level=1");
$linuxpts = file_get_contents("http://missilecommand:5984/lab_machine_data/_design/linux/_view/pts?group_level=1");
$array = [
  "windows" => $windowsquery,
  "linuxtty" => $linuxtty,
  "linuxpts" => $linuxpts,
  ];

echo json_encode($array);
?>
