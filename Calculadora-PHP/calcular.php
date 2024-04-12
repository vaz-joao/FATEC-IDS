<?php


// Quando usar o "$" significa variavel
//recuperar as informações enviadas pelo formulario
//méthod = GET

$numero1 = $_GET["num1"];
$numero2 = $_GET["num2"];
$operacao = $_GET["operacao"];


//Realizar o processamento das informações 
if($operacao == "soma"){
    $resultado = $numero1 + $numero2;
    echo "<h1>".$resultado."<h1>";
    echo "<a href='index.php'><img src='img/icons/return.png' alt='Error'></a>";

}
elseif($operacao == "subtrair"){
    $resultado = $numero1 - $numero2;
    echo "<h1>".$resultado."<h1>";
    echo "<a href='index.php'><img src='img/icons/return.png' alt='Error'></a>";
}
elseif($operacao == "multiplicar"){
    $resultado = $numero1 * $numero2;
    echo "<h1>".$resultado."<h1>";
    echo "<a href='index.php'><img src='img/icons/return.png' alt='Error'></a>";
}
elseif($operacao == "divisao"){
    $resultado = $numero1 / $numero2;
    echo "<h1>".$resultado."<h1>";
    echo "<a href='index.php'><img src='img/icons/return.png' alt='Error'></a>";

}
