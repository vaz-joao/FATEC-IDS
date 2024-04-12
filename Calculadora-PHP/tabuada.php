<?php


$tabuada = $_GET['tabuada'];


 echo 'Tabuada Selecionada: <br>';

 for($i=0; $i<=10; $i++){

    
    echo $i. "X" . $tabuada. "=". $i* $tabuada. '<br>';
 } 

 
 echo '<br> Todas as Tabuadas: ';

for ($tabuada = 0; $tabuada <= 10; $tabuada++){
 echo '<br>';
    for($i=0; $i<=10; $i++){

    
    echo $i. "X" . $tabuada. "=". $i* $tabuada. '<br>';
    
}
}   
     echo "<a href='index.php'><img src='img/icons/return.png' alt='Error'></a>";