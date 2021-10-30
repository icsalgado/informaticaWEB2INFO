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
    <div class="aula2">
        <?php
            echo "<br><h2> Arrays </h2><br>";
            $ingredientes = [
                'farinha ',
                'açucar ',
                'leite ',
                'nata ',
                'fermento ',
                'ovos '
            ];//O array não precisa ser declarado em linha
            print_r($ingredientes);

            echo "<br><h2> Spread Operator ... </h2><br>";

            $bolo2 = [
                ...$ingredientes, //ele insere um outro array dentro de um novo array
                'corante '
            ];
            print_r($bolo2);
            
            echo "<br><h2> IF - ELSE </h2><br>";
            $variavelA = 5;
            $variavelB = 6;
            if($variavelA > $variavelB){
                echo "$variavelA é maior que $variavelB";
            }elseif($variavelA < $variavelB){
                echo "$variavelA é menor que $variavelB";
            }else{
                echo "$variavelA é igual $variavelB";
            }

            echo "<br><h2> SWITCH </h2><br>";
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

            echo "<br><h2> OPERADOR TERNÁRIO </h2><br>";
            $idade = 18;
            echo ($idade >= 18) ? 'Maior de idade' : 'Menor de idade';
        ?>
    </div>
</body>
</html>