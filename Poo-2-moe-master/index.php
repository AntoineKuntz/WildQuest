<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bike</title>
</head>
<body>
<?php

require_once 'Camion.php';

$CamiondeMoe = new Camion('yellow', 2, 'essence',16);
	echo $CamiondeMoe->start() ;
	echo $CamiondeMoe->forward() ;
	echo $CamiondeMoe->brake();
	$CamiondeMoe->setCurrentCharge(10);
	echo $CamiondeMoe->isFull() ;
    $CamiondeMoe->setCurrentCharge(16);
	echo $CamiondeMoe->isFull() ;
