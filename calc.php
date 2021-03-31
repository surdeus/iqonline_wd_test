<?php
$percent = 0.1 ;
$ydays = 365 ;
$ndays = $ydays * $_POST["time"] ;

$sumprev = $_POST["sum"] ;

$sumadd = 0 ;
if($_POST["should-refill"] == "1" ){
	$sumadd = $_POST["sumadj"] ;
}

$sum = $sumprev+($sumprev+$sumadd)*$ndays*($percent/$ydays) ;

echo "$sum" ;
?>
