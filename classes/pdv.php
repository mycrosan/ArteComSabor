<?php
/**
 * Class finalizaPedido
 */
class Pdv extends Crud{
    protected $tabela = 'pdv';
    protected $campoOrdenacao = 'ID_PDV';


    //dados do pdv.
    private $tipo;
    private $qte;
    private $valor;
    private $marca;
    private $imp;
    private $classe;
    private $status;
    private $altera;
    private $sessao;
    private $dataPdv;
    private $hora;
    private $idfuncionario;
    private $idcliente;
    private $idPdv;

    /**
     * @param mixed $idPdv
     */
    public function setIdPdv($idPdv)
    {
        $this->idPdv = $idPdv;
    }

    /**
     * @return mixed
     */
    public function getIdPdv()
    {
        $idUltimoPdv = $this->consulta("SELECT MAX(ID_PDV) FROM pdv");
      foreach ($idUltimoPdv as $valor){
          return $valor;
      }

    }


    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $dataPdv
     */
    public function setDataPdv($dataPdv)
    {
        $this->dataPdv = $dataPdv;
    }

    /**
     * @return mixed
     */
    public function getDataPdv()
    {
        return $this->dataPdv;
    }
    /**
     * @param mixed $sessao
     */
    public function setSessao($sessao)
    {
        $this->sessao = $sessao;
    }

    /**
     * @return mixed
     */
    public function getSessao()
    {
        return $this->sessao;
    }
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
    public function setStatus($situacao)
    {
        $this->situacao = $situacao;
    }

    /**
     * @return mixed
     */
    public function getStatus()
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
        $sql = "INSERT INTO $this->tabela (TIPO, QTE, VALOR, MARCA, IMP, CLASSE, STATUS, ALTERA, funcionarios_ID_FUNCIONARIO, clientes_ID_CLIENTE, SESSAO, DATAPDV, HORA) VALUES (:tipo, :qte,:valor,:marca,:imp,:classe,:status,:altera, :idfuncionario,:idcliente, :sessao, :datapdv, :hora)";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':qte', $this->qte);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':marca', $this->marca);
        $stmt->bindParam(':imp', $this->imp);
        $stmt->bindParam(':classe', $this->classe);
        $stmt->bindParam(':status', $this->situacao);
        $stmt->bindParam(':altera', $this->altera);
        $stmt->bindParam(':idfuncionario', $this->idfuncionario);
        $stmt->bindParam(':idcliente', $this->idcliente);
        $stmt->bindParam(':sessao', $this->sessao);
        $stmt->bindParam(':datapdv', $this->dataPdv);
        $stmt->bindParam(':hora', $this->hora);
        return $stmt->execute();
    }
     public function atualizar($id)
    {
        $sql = "UPDATE $this->tabela SET nome = :nome, email = :email WHERE id = :id";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
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