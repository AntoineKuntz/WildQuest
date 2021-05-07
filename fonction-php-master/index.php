<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$animals = [ 'Hamster' , 'Hibou' ];
$item = [ 'boule de riz' , 'Pomme'];
function writeSecreteSentence(string $parametre_1, string $parametre_2)
{
   return $parametre_1 ."s'incline en face de " .$parametre_2;
   
}
echo writeSecreteSentence ($animals[0],$item[0])
?>

</body>
</html>