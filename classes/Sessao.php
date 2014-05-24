<?php
/**
 * Created by PhpStorm.
 * User: Mycrosan
 * Date: 20/05/14
 * Time: 21:03
 */

class Sessao {
    private static $_sessaoIniciada = false;
    public static function iniciaSessao()
    {
        if(self::$_sessaoIniciada == false)
        {
        session_start();
        self::$_sessaoIniciada = true;
        }
    }
    public static function set($key, $value)
    {
        $_SESSION[$key][] = $value;
    }
    public static function get($key, $segundaChave = false,$terceiraChave = false)
    {
        if($segundaChave == true)
        {
            if(isset($_SESSION[$key][$segundaChave]))
                return $_SESSION[$key][$segundaChave];
        }
        else
        {
             if (isset($_SESSION[$key]))
                return $_SESSION[$key];
        }
            return false;
    }
    public static function showArray()
    {
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    }
    public static function showValues($key , $value)
    {
        echo"<table class='table table-condensed'>";
        echo"<tr>";
        $cont = 0;
        foreach($_SESSION[$key] as $valor2){
        foreach($value as $valores2){
            $num = count($value);
            if($cont < $num){
            echo "<th>$valores2</th>";
            }
            $cont += 1;
        }

    }
        echo "</tr>";
        foreach ($_SESSION[$key] as $valor){

           foreach($value as $valores){
               echo "<td>".$valor[$valores]."</td>";
           }
            echo"</tr>";

        }
        echo "<tr>";
        echo"</tr>";
        echo "</table>";
    }

} 