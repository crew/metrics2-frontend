<?php

header("Content-Type: application/json");
echo file_get_contents("http://missilecommand.ccs.neu.edu:5984/allthefucks/_design/windows/_view/windows?group_level=1");

?>
