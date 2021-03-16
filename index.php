<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; 

switch ($opponentWeapon){
case 'fists' :
$indyWeapon = 'gun';
break;
case 'whips' :
$indyWeapon = 'fists';
break;
case 'gun' :
$indyWeapon = 'whips';
break;
}

echo " the opponent chose " .$opponentWeapon ." Indiana Jones quickdraw" .$indyWeapon;
?>
