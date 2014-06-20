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

    public static function showValues($key, $value)
    {
        echo "<table class='table table-condensed'>";
        echo "<tr>";
        $cont = 0;
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
        foreach ($_SESSION[$key] as $valor) {
            foreach ($value as $valores) {
                echo "<td>" . $valor[$valores] . "</td>";
            }
            echo "</tr>";
        }
        echo "<tr>";
        echo "</tr>";
        echo "</table>";
    }

} 