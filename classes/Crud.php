<?php
//ARQUIVO 3
/**
 * Created by PhpStorm.
 * User: Mycrosan
 * Date: 21/04/14
 * Time: 22:39
 */
require_once "classes/DB.php";
abstract class Crud extends DB{
    protected $tabela;
    abstract public function inserir();
    abstract public function atualizar($id);

    public function encontrar($id){
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function consulta($sql){
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function encontrarTudo(){
        $sql = "SELECT * FROM $this->table ORDER BY 'CADASTRO' DESC LIMIT 10";
        $stmt = DB::preparaotrem($sql);
        $stmt->execute();
        return $stmt->fetchAll();

    }
    public function apagar($id){
        $sql = "DELETE FROM $this->table WHERE id= :id";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }


}