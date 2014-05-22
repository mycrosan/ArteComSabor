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
            echo "passou aqui 2";
            if(isset($_SESSION[$key][$segundaChave]))
                return $_SESSION[$key][$segundaChave];
        }
        else
        {
            echo "passou aqui 3";
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
    public static function showValues($key , $value = false)
    {
        foreach ($_SESSION[$key] as $key => $valor){
            echo $valor;
        }

    }

} 