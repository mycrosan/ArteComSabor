<?php
/**
 * Created by PhpStorm.
 * User: Mycrosan
 * Date: 21/04/14
 * Time: 23:41
 */
//ARQUIVO 4
require_once 'classes/Crud.php';
class Usuarios extends Crud {

    protected $table = 'clientes';
    private $ordenacao;
    private $nome;
    private $email;

    public function configurarNome($nome){
        $this->nome = $nome;
    }
    public function obterNome(){
        return $this->nome;
    }
    public  function configuraEmail($email){
        $this->email = $email;
    }

    public function inserir(){
    $sql = "INSERT INTO $this->table (nome,email) VALUES (:nome, :email)";
    $stmt = DB::preparaotrem($sql);
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':email', $this->email);
    return $stmt->execute();
}
    public function atualizar($id){

        $sql = "UPDATE $this->table SET nome = :nome, email = :email WHERE id = :id";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

} 