<?php 
$p1 = $_REQUEST["p1"];
$p2 = $_REQUEST["p2"];
$p3 = $_REQUEST["p3"];
$p4 = $_REQUEST["p4"];
$p5 = $_REQUEST["p5"];
$p6 = $_REQUEST["p6"];
$p7 = $_REQUEST["p7"];
$p8 = $_REQUEST["p8"];
$p9 = $_REQUEST["p9"];

$message = exec("../scripts/index.py $p1 $p2 $p3 $p4 $p5 $p6 $p7 $p8 $p9 2>&1");
print_r($message);
?>