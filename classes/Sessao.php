<?php

class Sessao
{
    private static $_sessaoIniciada = false;

    public static function iniciaSessao()
    {
        if (self::$_sessaoIniciada == false) {
            session_start();
            self::$_sessaoIniciada = true;
        }
    }

    public static function set($key, $value)
    {
        $_SESSION[$key][] = $value;
    }

    // Essa função pode ser usada com 1,2 ou 3 parametros para obter o valor de uma sessao.
    public static function get($key, $segundaChave = false, $terceiraChave = false)
    {

        if ($terceiraChave == true) {
            //Recebe até 3 valores e retorna o valor para impressão.
            if (isset($_SESSION[$key][$segundaChave][$terceiraChave]))
                $valorSessao = $_SESSION[$key][$segundaChave][$terceiraChave];
            return $valorSessao;

        } elseif ($segundaChave == true) {
            if (isset($_SESSION[$key][$segundaChave]))
                echo $_SESSION[$key] [$segundaChave];
            return $_SESSION[$key] [$segundaChave];

        } else {
            if (isset($_SESSION[$key]))
                return $_SESSION[$key];
        }
        return false;
    }

    public static function showArray($key = false)
    {
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    }

    public static function showValuesProdutos($key, $value)
    {
        echo "<table class='table table-condensed'>";
        echo "<tr>";
        $cont = 0;
        //Exibe os cabeçalhos
        foreach ($_SESSION[$key] as $valor2) {
            foreach ($value as $valores2) {
                $num = count($value);
                if ($cont < $num) {
                    echo "<th>$valores2</th>";
                }
                $cont += 1;
            }
        }
        echo "</tr>";
        // Exibe os valores
        $soma = 0;
        foreach ($_SESSION[$key] as $valor) {
            echo "<td>" . $valor['COD'] . "</td>";
            echo "<td>" . $valor['DESCRIÇÃO'] . "</td>";
            echo "<td>" . $valor['QUANT.'] . "</td>";
            echo "<td>R$ " . number_format($valor['PREÇO'], 2) * $valor['QUANT.'] . "</td>";

            $soma += $valor['PREÇO'];
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td>TOTAL</td>";
        echo "<td>R$ " . number_format($soma, 2) . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "</tr>";
        echo "</table>";
    }

    public static function showValuesCliente($key, $value)
    {
        echo "<table class='table table-condensed'>";
        echo "<tr>";
        $cont = 0;
        //Exibe os cabeçalhos
        foreach ($_SESSION[$key] as $valor2) {
            foreach ($value as $valores2) {
                $num = count($value);
                if ($cont < $num) {
                    echo "<th>$valores2</th>";
                }
                $cont += 1;
            }
        }
        echo "</tr>";
        // Exibe os valores
        $soma = 0;
        foreach ($_SESSION[$key] as $valor) {
            echo "<td>" . $valor['COD'] . "</td>";
            echo "<td>" . $valor['FONE'] . "</td>";
            echo "<td>" . $valor['NOME'] . "</td>";
            echo "<td>" . $valor['FUNC.'] . "</td>";
            echo "<td>" . $valor['ENDEREÇO'] . "</td>";
            echo "<td>" . $valor['BAIRRO'] . "</td>";
            echo "</tr>";
        }
        echo "<tr>";
        echo "</tr>";
        echo "</table>";
    }

}