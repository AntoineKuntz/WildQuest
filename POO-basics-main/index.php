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
require_once './Bicycle.php';
require_once 'Cars.php';

$bike = new Bicycle("blue", 15);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

$rockrider = new Bicycle("yellow",10);


echo $rockrider->forward();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake(). '<br>';

$tornado = new Bicycle( "black", 8);


echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake(). '<br>';




$mini = new Cars("black & white", 4, "essence");

echo $mini->start();
echo '<br> Démarrage ok' . '<br>';
echo $mini->forward();
echo '<br> Vitesse de la voiture : ' . $mini->getCurrentSpeed() . ' km/h' . '<br>';
echo $mini->brake();
echo '<br> Vitesse de la voiture : ' . $mini->getCurrentSpeed() . ' km/h' . '<br>';
echo $mini->brake();

$mini = new Cars("purple", 4, "essence");

echo $mini->start();
echo '<br> Démarrage ok' . '<br>';
echo $mini->forward();
echo '<br> Vitesse de la voiture : ' . $mini->getCurrentSpeed() . ' km/h' . '<br>';
echo $mini->brake();
echo '<br> Vitesse de la voiture : ' . $mini->getCurrentSpeed() . ' km/h' . '<br>';
echo $mini->brake();

?>
</body>
</html>
