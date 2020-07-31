<?php
$player1 = 'Pikachu';
$player2 = 'Mewtoo';
$player1Life = 300;
$player2Life = 300;

echo '/////////////////////////////////////';
echo 'C\'est l\'heure du dueeeeeeeeel !';
echo'/////////////////////////////////////';
echo '';

while ($player1Life > 0 || $player2Life > 0) {
    $puissanceAttaque1 = rand($min = 0, $max =50);
    $puissanceAttaque2 = rand($min = 0, $max=50);

    echo ('');
    echo $player1. ' '.$player1Life.'-' .$player2. '' .$player2Life;

   echo $player1. ' attaque et enlève ' .$puissanceAttaque1.' points de vie' ;
   echo $player2Life = $player2Life - $puissanceAttaque1;
   
   echo $player2. ' attaque et enlève ' .$puissanceAttaque2.' points de vie';
    $player1Life = $player1Life - $puissanceAttaque2;
    
}
echo '/////////////////////////////////////';
if ($player1Life < 20)
{
    $potion1 = rand($min = 30, $max =90);
    $player1Life = $potion1 + $player1Life ;
    echo $player1. ' Vous avez bu une potion et gagné'  .$potion1. 'Pv vous avez' .$player1Life.' points' ;
    
}
if ($player2Life < 20)
{
    $potion2 = rand($min = 30, $max =90);
    $player2Life = $potion2+ $player2Life ;
    echo $player2. 'a bu une potion et gagné' .$potion2. 'PV vous avez' .$player2Life. 'points';

}


if ($player1Life > 0 && $player2Life  <= 0) 
{    
    echo $player1.'  est le vainqueur! et' .$player2. ' est perdant';
}

 elseif($player1Life <= 0 && $player2Life > 0)  
{
    echo $player1.' désolé Pikachu, perdu :('  .$player2. ' a gagné, la team rocket a encore gagné ' ;
}
else 
{
    echo $player1.' et ' .$player2. ' êtes à  egalités, quel combat !!';    
}    
?>