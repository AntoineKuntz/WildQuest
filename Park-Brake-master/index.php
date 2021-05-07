<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParkBrake</title>
</head>
<body>
<?php

require_once 'Cars.php';

$mini = new Cars("purple", 4, "essence");
try{
    echo $mini->start() . '</br>';
}
catch (Exception $e)
{
    echo "Exception received  : ". $e->getMessage() . ".";
    echo $mini->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>";
}






echo '</br>';

echo $mini->setParkBrake();






try{
    echo $mini->start() . '</br>';
}
catch (Exception $e)
{
    echo "Exception received  : ". $e->getMessage() . ".";
    echo $mini->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>";
}

?>
</body>
</html>
