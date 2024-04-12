<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    
<!-- O "action" com metodo get é a ação que ira realizar, o get seria para puxar o arquivo -->
    <form action="calcular.php" method="get">

    <!-- O Label é para escrever -->
     <label for="">Digite o primeiro numero</label>
    <input type="text" name="num1" placeholder="Informe o primeiro número"><br><br>

     <label for="">Digite o segundo numero</label>
     <input type="text" name="num2" placeholder="Informe o segundo número"><br><br>


     <label>Selecione a operação matemática</label>        
     <select name="operacao">
        <option value="soma">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="divisao"> Divisão</option>
     </select><br><br>
     
      <input type="submit" value="Calcular">

 </form>

 <form action="tabuada.php" method="get">
     <label>Selecione a tabuada </label>
        <select name="tabuada">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
     </select><br><br>

     <input type="submit" value="Ver Tabuada">


 </form>

</body>
</html>