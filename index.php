<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
        <script src="./js/calc.js" charset="utf-8"></script>
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
    <body>
        <h1 align="center">Calculadora</h1>
        <form name="calc">
            <table align="center" border="2" rules="none">
                <tr align="center">
                    <th colspan="4"><input type="text" name="visor" id="visor"/ readonly="readonly"></th>
                </tr>

                <tr align="center">
                    <td><button type="button" value="(" onclick="botao(value)" class="operacoes">(</button></td>
                    <td><button type="button" value=")" onclick="botao(value)" class="operacoes">)</button></td>
                    <td><button type="button" value="%" onclick="botao(value)" class="operacoes">%</button></td>
                    <td><button type="button" value="AC" onclick="limpar()" class="operacoes">AC</button></td>
                </tr>

                <tr align="center">
                    <td><button type="button" value="7" onclick="botao(value)">7</button></td>
                    <td><button type="button" value="8" onclick="botao(value)">8</button></td>
                    <td><button type="button" value="9" onclick="botao(value)">9</button></td>
                    <td><button type="button" value="/" onclick="botao(value)" class="operacoes">÷</button></td>
                </tr>

                <tr align="center">
                    <td><button type="button" value="4" onclick="botao(value)">4</button></td>
                    <td><button type="button" value="5" onclick="botao(value)">5</button></td>
                    <td><button type="button" value="6" onclick="botao(value)">6</button></td>
                    <td><button type="button" value="*" onclick="botao(value)" class="operacoes">x</button></td>
                </tr>

                <tr align="center">
                    <td><button type="button" value="1" onclick="botao(value)">1</button></td>
                    <td><button type="button" value="2" onclick="botao(value)">2</button></td>
                    <td><button type="button" value="3" onclick="botao(value)">3</button></td>
                    <td><button type="button" value="-" onclick="botao(value)" class="operacoes">-</button></td>
                </tr align="center">

                <tr align="center">
                    <td><button type="button" value="0" onclick="botao(value)">0</button></td>
                    <td><button type="button" value="." onclick="botao(value)">,</button></td>
                    <td><button type="button" value="=" onclick="calcular()" id="igual">=</button></td>
                    <td><button type="button" value="+" onclick="botao(value)" class="operacoes">+</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
