<?php
//ARQUIVO 3
/**
 * Created by PhpStorm.
 * User: Mycrosan
 * Date: 21/04/14
 * Time: 22:39
 */
require_once "classes/DB.php";

abstract class Crud extends DB
{
    protected $tabela;
    protected $campoid;

    abstract public function inserir();

    abstract public function atualizar($id);

    public function encontrar($id)
    {
        $sql = "SELECT * FROM $this->tabela WHERE $this->campoid = :id";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function consulta($sql)
    {
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function encontrarTudo()
    {
        $sql = "SELECT * FROM $this->tabela ORDER BY $this->campoid DESC";
        $stmt = DB::preparaotrem($sql);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function apagar($id)
    {
        $sql = "DELETE FROM $this->tabela WHERE id= :id";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }


}