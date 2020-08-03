<?php

// definition des constantes du jeu // 

$player1 = 'Pikachu';
$player2 = 'Mewtoo';
$player1Life = 300;
$player2Life = 300;

echo '/////////////////////////////////////';
echo 'C\'est l\'heure du dueeeeeeeeel !';
echo'/////////////////////////////////////';
echo '';

// programme defini par une boucle avec des conditions //

while ($player1Life > 0 && $player2Life > 0) {
    $puissanceAttaque1 = rand(0,50);
    $puissanceAttaque2 = rand(0,50);

    // constantes pour 90% de reussites de l'attaque et 10% echouée //

    $attaquereussie1 = rand(0,100);
    $attaquereussie2 = rand(0,100);


    echo "$player1 $player1Life $player2 $player2Life";

    // bloc d'attaques   //

    if ($attaquereussie1 <10 ) 
    {
        echo 'attaque éclair a échouée';

    } else
    {   echo $player1.'attaque et enlève' .$puissanceAttaque1.'points de vie';
             $player2Life = $player2Life - $puissanceAttaque1;
    }


    if ($attaquereussie2 <10 ) 
    {
        echo 'son attaque a échouée';

    }else 
    { 
        echo $player2. 'attaque et enlève' .$puissanceAttaque2. 'points de vie';
        $player1Life = $player1Life - $puissanceAttaque2;
    }

 
    echo $player1. ' '.$player1Life.'-' .$player2. ' '.$player2Life;

    echo $player1. ' attaque et enlève ' .$puissanceAttaque1.' points de vie' ;
    echo $player2Life = $player2Life - $puissanceAttaque1;
    
    echo $player2. ' attaque et enlève ' .$puissanceAttaque2.' points de vie';
        $player1Life = $player1Life - $puissanceAttaque2;
        
}
echo '/////////////////////////////////////';

// ajout de potion   //

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

//affiche le resultat du programme// 
 
echo 'le combat est terminé!';

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