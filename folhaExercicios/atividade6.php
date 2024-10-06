<!-- Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras.
Ele comprou maçã, melancia, laranja, repolho, cenoura, batatinha.
Crie um programa que calcule o valor gasto com cada produto comprado, sendo o
resultado do valor individual do produto em Kg multiplicado pela quantidade em Kg
comprada por Joãozinho.
Ao final escrever uma frase com o valor da compra, e uma previsão se o dinheiro será
o suficiente para pagar a conta, caso falte dinheiro escrever uma frase em vermelho
com o valor que ficou acima do disponível por Joãozinho, e não, escrever uma fase em
azul e o valor que Joãozinho ainda poderia gastar. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <form action="atividade6.php" method='POST'>
        <div>
            <p>Joãozinho possui um saldo de 50,00R$! <br> </p>
            <label for="maça">Maçã 11,99 KG</label>
            <input type="number" step = "any" name="maça" id="maça">
            <br> 
            <label for="melancia">Melancia 1,79 KG</label>
            <input type="number" step = "any" name="melancia" id="melancia">
            <br>
            <label for="laranja">Laranja 6,99 KG</label>
            <input type="number" step = "any" name="laranja" id="laranja">
            <br>
            <label for="repolho">Repolho 3,99 KG</label>
            <input type="number" step = "any" name="repolho" id="repolho">
            <br>
            <label for="cenoura">Cenoura 3,99 KG</label>
            <input type="number" step = "any" name="cenoura" id="cenoura">
            <br>
            <label for="batata">Batata 4,99 KG</label>
            <input type="number" step = "any" name="batata" id="batata">
            <br>
            <input type="submit">   
        </div>
    </form> 

    <?php

        $Joaozinho = 50;
        $valorMaça = 11.99;
        $valorMelancia = 1.79;
        $valorLaranja = 6.99;
        $valorRepolho = 3.99;
        $valorCenoura = 3.99;
        $valorBatata = 4.99;

        if (isset($_POST['maça'])){
            $maça = $_POST['maça'] ?: 0;
            $melancia = $_POST['melancia'] ?: 0;
            $laranja = $_POST['laranja'] ?: 0;
            $repolho = $_POST['repolho'] ?: 0;
            $cenoura = $_POST['cenoura'] ?: 0;
            $batata = $_POST['batata'] ?: 0;

            $gastoMaça = $maça*$valorMaça;
            $gastoMelancia = $melancia*$valorMelancia;
            $gastoLaranja = $laranja*$valorLaranja;
            $gastoRepolho = $repolho*$valorRepolho;
            $gastoCenoura = $cenoura*$valorCenoura;
            $gastoBatata = $batata*$valorBatata;
            $gastoTotal = $gastoBatata+$gastoCenoura+$gastoRepolho+$gastoLaranja+$gastoMelancia+$gastoMaça;
            echo ("<br> Gastos com Maçã: $gastoMaça <br>");
            echo ("Gastos com Melancia: $gastoMelancia <br>");
            echo ("Gastos com Laranja: $gastoLaranja <br>");
            echo ("Gastos com Repolho: $gastoRepolho <br>");
            echo ("Gastos com Cenoura: $gastoCenoura <br>");
            echo ("Gastos com Batata: $gastoBatata <br>");
            echo ("Valor total da compra é $gastoTotal R$");
            if ($gastoTotal == $Joaozinho ) {
                echo ('<br> <br> <font color="green">'."Saldo esgotado!");
            }
            else if  ($gastoTotal < $Joaozinho) {
                $sobra=($Joaozinho - $gastoTotal);
                echo ('<br> <br> <font color="blue">'."Joazinho ainda possui $sobra para gastar!");
            }
            else {
                echo ('<br> <br> <font color="red">'."Gasto acima do saldo disponível!"); 
            }
        }
    ?>
</body>
</html>