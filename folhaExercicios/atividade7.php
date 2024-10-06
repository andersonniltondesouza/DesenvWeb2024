<!-- Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como
ela não tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que
ficou em 60 parcelas de R$ 489,65.
Escreva um programa que calcule o valor gasto só dos juros que serão pagos por
Mariazinha em comparação ao valor a vista do carro. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>
<body>
<form action="atividade7.php" method='POST'>
        <div>
            <p>
                <?php
                    $valor = 22500; 
                    echo ("Valor do financiamento = $valor <br>");
                    $Percentual = 0.02; //2% ao ano//
                    $tempo = 12; //12 meses = 1 ano//
                    $juros = $valor*$Percentual*$tempo;
                    echo ("Valor dos juros = $juros");
                ?> 
            </p>
        </div>
    </form> 
</body>
</html>