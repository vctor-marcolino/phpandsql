<html>
    <head>
        <title> Desafio Tabela </title>
    </head>
    <body>
        <table border="2">
            <tr>
            <th> Salgadinhos </th>
            <th> Preços </th>
            </tr>

            <?php
                $salgadinhos = array(
                      "Cebolitos" => 7.30,
                      "Baconzitos" => 8.60,
                      "Doritos" => 10.50);

                foreach ($salgadinhos as $nome => $preco){
                    echo "<tr>";
                    echo "<td>". $nome. "</td>"."<td>". $preco."</td>";
                    echo"</tr>";
                }
?>

        </table>
    </body>
</html>