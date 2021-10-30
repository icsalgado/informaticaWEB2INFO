<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentos de PHP</title>
</head>
<body>
    <div><h1>Fundamentos de PHP</h1></div>
    
    <div class="aula1">
        <h2>Aula 1</h2>
        <?php
            echo "Ola Mundo";
            //comentário de linha
            /*Comentário
            de
            bloco */

            $variavelInteiro = 5;
            $variavelFloat = 6.7;
            $variavelString = "Meu Nome";
            $variavelBooleana = true;
            $variavelNull = null;
            $variavelVazia = '';
            print_r("<br><br>Tipos de Variaveis<br>Variavel Inteiro");
            var_dump($variavelInteiro);
            print_r("Variavel Float");
            var_dump($variavelFloat);
            print_r("Variavel String");
            var_dump($variavelString);
            print_r("Variavel Booleana");
            var_dump($variavelBooleana);
            print_r("Variavel NULL");
            var_dump($variavelNull);
            print_r("Variavel Vazia");
            var_dump($variavelVazia);
            
            print_r("Constante");
            define('PI', 3.14);//define uma constante
            var_dump(PI);

            print_r('Concatenação');
            $nome = 'Nome';
            $sobrenome = 'Sobrenome';
            $nomeCompleto = $nome.' '.$sobrenome;//concatenação com .
            var_dump($nomeCompleto);
            
        ?>
    </div>
    <div class="aula2">
        <h2>Aula 2</h2>
        <?php
            echo "<br><h3> Arrays </h3><br>";
            $ingredientes = [
                'farinha ',
                'açucar ',
                'leite ',
                'nata ',
                'fermento ',
                'ovos '
            ];//O array não precisa ser declarado em linha
            print_r($ingredientes);

            echo "<br><h3> Spread Operator ... </h3><br>";

            $bolo2 = [
                ...$ingredientes, //ele insere um outro array dentro de um novo array
                'corante '
            ];
            print_r($bolo2);
            
            echo "<br><h3> IF - ELSE </h3><br>";
            $variavelA = 5;
            $variavelB = 6;
            if($variavelA > $variavelB){
                echo "$variavelA é maior que $variavelB";
            }elseif($variavelA < $variavelB){
                echo "$variavelA é menor que $variavelB";
            }else{
                echo "$variavelA é igual $variavelB";
            }

            echo "<br><h3> SWITCH </h3><br>";
            $operador = 'b';
            switch($operador){
                case 1:
                    echo 'O operador é o numero 1';
                    break;
                case 'a':
                    echo 'Ooperador é a letra A';
                    break;
                default:
                    echo 'Operador não listado';
                    break;
            }

            echo "<br><h3> OPERADOR TERNÁRIO </h3><br>";
            $idade = 18;
            echo ($idade >= 18) ? 'Maior de idade' : 'Menor de idade';

            echo "<br><h4> ISSET E NULL </h4><br>";
            
            //$nomeMeio = ' Com Nome';

            //$nomeCompleto .= isset($nomeMeio) ? $nomeMeio : " Sem Nome";
            $nomeCompleto .= $nomeMeio ?? ' Sem Nome';
            
            print_r($nomeCompleto);

            echo "<br><h4> WHILE </h4><br>";
            $loopWhile = 1;
            while($loopWhile <= 5){
                echo $loopWhile;
                $loopWhile++;//incremento para não gerar um loop infinito
            }
            echo "<br><h4> DO WHILE </h4><br>";
            $loopDoWhile = 1;
            do{
                echo $loopDoWhile;
                $loopDoWhile++;
            }while($loopDoWhile <= 5);
            echo "<br><h4> FOR </h4><br>";
            for($loopFor = 1; $loopFor <= 5; $loopFor++){
                echo $loopFor;
            }
            echo "<br><h4> FOREACH </h4><br>";
            foreach($ingredientes as $produto){
                echo '<br>Produto: '.$produto;
            }

        ?>
    </div>
    <div class="aula3">
        <h2>Aula 3</h2>
        <?php
            
        ?>
    </div>
</body>
</html>