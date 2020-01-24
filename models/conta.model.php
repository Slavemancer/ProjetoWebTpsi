<?php
include_once("helpers/pdo.php");
class Conta
{
    private $id;
    private $nome;
    private $banco;
    private $valor;
    private $user;

    public function inserir()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $nome = $this->nome;
        $banco = $this->banco;
        $valor = $this->valor;
        $user = $this->user;

        $sql = "INSERT INTO contas (nome, banco, valor, user) VALUES ('$nome', $banco, $valor, $user)";

        return $conexao->exec($sql);
    }

    public function apagar()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $id = $this->id;

        $sql = "DELETE FROM contas WHERE id = $id";

        return $conexao->exec($sql);
    }

    public function editar()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $id = $this->id;
        $nome = $this->nome;
        $banco = $this->banco;
        $valor = $this->valor;
        $user = $this->user;

        $sql = "UPDATE users SET nome='$nome', banco = '$banco', valor = '$valor',user='$user' WHERE id = $id";

        return $conexao->exec($sql);
    }

    public function list()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $user = $this->user;
        $query = $conexao->query("SELECT * FROM contas");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByID()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $id = $this->id;
        $sql = "SELECT * FROM contas where id = $id";
        $query = $conexao->query($sql);
        if ($query)
            return $query->fetch(PDO::FETCH_ASSOC);
        return false;
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of banco
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set the value of banco
     *
     * @return  self
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
