<?php
include_once("helpers/pdo.php");
class User
{
    private $id;
    private $username;
    private $email;
    private $password;

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUsername($username)
    {
        $this->username = $username;

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

    public function login()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $email = $this->email;
        $password = md5($this->password);

        $query = $conexao->query("SELECT * FROM users where email = '$email' and password = '$password'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function inserir()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $email = $this->email;
        $username = $this->username;
        $password = md5($this->password);

        $sql = "INSERT INTO users(username,email, password) VALUES ('$username','$email','$password')";

        return $conexao->exec($sql);
    }

    public function apagar()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $id = $this->id;

        $sql = "DELETE FROM users WHERE id = $id";

        return $conexao->exec($sql);
    }

    public function editar()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $id = $this->id;
        $email = $this->email;
        $username = $this->username;
        $password =  md5($this->password);

        $sql = "UPDATE users SET username='$username' email = '$email', password = '$password' WHERE id = $id";

        return $conexao->exec($sql);
    }

    public function list()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $query = $conexao->query("SELECT * FROM users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByID()
    {
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();

        $id = $this->id;
        $sql = "SELECT * FROM users WHERE id = $id";
        $query = $conexao->query($sql);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    private function isEmpty($string)
    {
        if ($string == "") {
            return true;
        }
        return false;
    }

    public function isValid()
    {
        if ($this->isEmpty($this->username) or $this->isEmpty($this->email) or $this->isEmpty($this->password)) {
            return array(false, "vazio");
        }
        $conexaoBD = new ConexaoBD();
        $conexao = $conexaoBD->criarConexao();
        $query = $conexao->query("SELECT * FROM users where email = '$this->email'");
        $user = $query->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($user)) {
            return array(false, "email");
        }
        $query = $conexao->query("SELECT * FROM users where username = '$this->username'");
        $user = $query->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($user)) {
            return array(false, "username");
        }
        return array(true, "");
    }
}
