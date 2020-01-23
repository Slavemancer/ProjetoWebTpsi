<?php
include_once("helpers/pdo.php");
class Bancos
{
    private $id;
    private $nome;

    public function list()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();
        $query = $conexao->query("SELECT * FROM banco");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByName()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();
        $query = $conexao->query("SELECT * FROM banco where nome='$this->nome'");
        return $query->fetchAll(PDO::FETCH_ASSOC)[0];
    }

    public function getById()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();
        $query = $conexao->query("SELECT * FROM banco  where id='$this->id'");
        return $query->fetchAll(PDO::FETCH_ASSOC)[0];
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
}
