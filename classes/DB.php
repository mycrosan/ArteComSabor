<?php
//ARQUIVO 2
/**
 * Created by PhpStorm.
 * User: Mycrosan
 * Date: 21/04/14
 * Time: 22:26
 */
require_once 'classes/config.php';
class DB{
    private static $instancia;
    public static function pegaInstancia(){
        if(!isset(self::$instancia)){
            try{
                self::$instancia = new PDO('mysql:host='.DB_HOST . ';dbname='.DB_NOME, DB_USUARIO,DB_SENHA);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instancia->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            }catch (PDOException $e){
                        echo $e->getMessage();
            }
        }
        return self::$instancia;
    }
    public static function preparaotrem($sql){
        return self::pegaInstancia()->prepare($sql);
    }
} 