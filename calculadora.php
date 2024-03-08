<html>
    <head>
        <title> Calculadora </title>
    </head>
    <body>
        <h2> Calculadora </h2>
        <form action="calculadoraServ.php" method="get">

            <label for="operando1"> 1 Número: </label>
            <input type="text" name="operando1">
<br><br>
            <label for="operando2"> 2 Número: </label>
            <input type="text" name="operando2">
<br><br>
            <label for="operacao"> Operação: </label>
            <select name="operacao">
                <option value=""> Selecione </option>
                <option value="+"> Soma </option>
                <option value="-"> Subtração </option>
                <option value="*"> Multiplicação </option>
                <option value="/"> Divisão </option>
            </select>
<br><br>
            <button type="submit"> Enviar </button>
        </form>
    </body>
</html>