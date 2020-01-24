<?php
include_once("models/user.model.php");
$action = "none";
$invalido = false;
if (isset($_POST["action"])) {
    $action = $_POST["action"];
    $data = $_POST;
    //echo $_POST["action"];
}
if (isset($_GET["action"])) {
    $action = $_GET["action"];
    $data = $_GET;
    //echo $_POST["action"];
}
session_start();
switch ($action) {
    case "Registar":

        $user = new User();
        $user->setUsername($data["username"]);
        $user->setEmail($data["email"]);
        if ($data["password"] == $data["repassword"]) {
            $user->setPassword($data["password"]);
            $inf = $user->isValid();
            if ($inf[0]) {
                $user->inserir();
            } else {
                $invalido = true;
                $mensagem = "O " . $inf[1] . " introduzido já está registado";
                break;
            }
        } else {
            $invalido = true;
            $mensagem = "As password introduzidas não sao iguais";
            break;
        }
    case "Entrar":
        if ($data["password"] == "") {
            $invalido = true;
        } else {
            $user = new User();
            $user->setEmail($data["email"]);
            $user->setPassword($data["password"]);
            $user = $user->login();
            if (empty($user)) {
                $invalido = true;
                $mensagem = "Email/password incoretos";
            } else {
                $_SESSION["user_id"] = $user[0]['id'];
                header("location:dashboard.php");
            };
        };
        break;
}
