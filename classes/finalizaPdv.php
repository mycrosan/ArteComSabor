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
    /**
     * @param mixed $idcliente
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;
    }

    /**
     * @return mixed
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * @param mixed $idfuncionario
     */
    public function setIdfuncionario($idfuncionario)
    {
        $this->idfuncionario = $idfuncionario;
    }

    /**
     * @return mixed
     */
    public function getIdfuncionario()
    {
        return $this->idfuncionario;
    }

    /**
     * @param mixed $altera
     */
    public function setAltera($altera)
    {
        $this->altera = $altera;
    }

    /**
     * @return mixed
     */
    public function getAltera()
    {
        return $this->altera;
    }

    /**
     * @param mixed $classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param mixed $imp
     */
    public function setImp($imp)
    {
        $this->imp = $imp;
    }

    /**
     * @return mixed
     */
    public function getImp()
    {
        return $this->imp;
    }

    /**
     * @param mixed $instancia
     */
    public static function setInstancia($instancia)
    {
        self::$instancia = $instancia;
    }

    /**
     * @return mixed
     */
    public static function getInstancia()
    {
        return self::$instancia;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }
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