<html>
    <head>
        <title> Resultado </title>
    </head>

    <body>
        <?php
            $_op1 = $_GET["operando1"];
            $_op2 = $_GET["operando2"];
            $operador = $_GET["operacao"];
            $resultado = null;

            switch ($operador) {
                case '+':
                    $resultado = $_op1 + $_op2;
                    echo $resultado."<br>";
                    break;

                case '-':
                    $resultado = $_op1 - $_op2;
                    echo $resultado."<br>";
                    break;

                case '*':
                    $resultado = $_op1 * $_op2;
                    echo $resultado."<br>";
                    break;

                case '/':
                    $resultado = $_op1 / $_op2;
                    echo $resultado."<br>";
                    break;

                default:
                    echo "Operação Invalida!";
                break;
            }

        ?>
    </body>
</html>