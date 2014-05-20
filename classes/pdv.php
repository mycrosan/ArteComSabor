<?php
/**
 * Class finalizaPedido
 */
class finalizaPdv extends Crud{
    protected $tablepdv = 'pdv';
    //dados do pdv.
    private $tipo;
    private $qte;
    private $valor;
    private $marca;
    private $imp;
    private $classe;
    private $situacao;
    private $altera;
    private $idfuncionario;
    private $idcliente;
    //dados do itensPedido
    public function inserir(){
        $sql = "INSERT INTO $this->table (TIPO, QTE, VALOR, MARCA,IMP,CLASSE,SITUACAO,ALTERA,funcionarios_ID_FUNCIONARIO,clientes_ID_CLIENTE) VALUES (:tipo, :qte,:valor,:marca,:imp,:classe,:situacao,:altera,:idfuncionario,:idcliente)";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':tipo', $this->nome);
        $stmt->bindParam(':qte', $this->qte);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':marca', $this->marca);
        $stmt->bindParam(':imp', $this->imp);
        $stmt->bindParam(':classe', $this->classe);
        $stmt->bindParam(':situacao', $this->situacao);
        $stmt->bindParam(':altera', $this->altera);
        $stmt->bindParam(':idfuncionario', $this->idfuncionario);
        $stmt->bindParam(':idcliente', $this->idcliente);
        return $stmt->execute();
    }

    public function atualizar($id)
    {
        $sql = "UPDATE $this->table SET nome = :nome, email = :email WHERE id = :id";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }


}