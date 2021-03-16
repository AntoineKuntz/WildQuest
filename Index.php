<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];




if($opponentWeapon === 'fists'){
  $indyWeapon = 'gun';
  echo "opponent chose " . $opponentWeapon . "\n";
echo "indianna Jones chose " . $indyWeapon . "\n";
  echo  "indianna Jones win the fight with " ." a " .$indyWeapon ."\n";
}elseif($opponentWeapon === 'whip'){
  $indyWeapon = 'fists';
  echo "opponent chose " . $opponentWeapon . "\n";
echo "indianna Jones chose " . $indyWeapon . "\n";
  echo  "indianna Jones win the fight with " ." his " .$indyWeapon ."\n";
}else{
  $indyWeapon = 'whip';
  echo "opponent chose " . $opponentWeapon . "\n";
echo "indianna Jones chose " . $indyWeapon . "\n";
  echo  "indianna Jones win the fight with " ." a " .$indyWeapon ."\n";
};

