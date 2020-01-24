<?php
$msg = "";
if (session_status() < 2)
    session_start();
include_once("models/conta.model.php");
include_once("models/banco.model.php");
$id = $_SESSION["user_id"];
$objBancos = new Bancos();
$contaOBJ = new Conta();
$contaOBJ->setUser($_SESSION["user_id"]);
$contas = $contaOBJ->list();
if (isset($_GET["adicionar"])) {
    $contaOBJ->setNome($_GET["nome"]);
    $contaOBJ->setValor($_GET["qtd"]);
    $contaOBJ->setUser($_SESSION["user_id"]);
    $objBancos->setNome($_GET["banco"]);
    $contaOBJ->setBanco($objBancos->getByName()["id"]);
    if ($contaOBJ->inserir()) {
        $msg = "sucess";
    } else {
        $msg = "error";
    }
}
if (isset($_GET["editar"])) {
    $contaOBJ->setNome($_GET["nome"]);
    $contaOBJ->setValor($_GET["qtd"]);
    $contaOBJ->setUser($_SESSION["user_id"]);
    $objBancos->setNome($_GET["banco"]);
    $contaOBJ->setBanco($objBancos->getByName()["id"]);
    if ($contaOBJ->editar()) {
        $msg = "sucess";
    } else {
        $msg = "error";
    }
}
if ($pageName == "Apagarconta") {
    if (isset($_GET["id"])) {
        $contaOBJ->setId($_GET["id"]);
        try {
            $conta = $contaOBJ->getByID();
        } catch (Exception $e) {
            $conta = false;
        }
        if ($conta) {
            if ($id == $conta["user"]) {
                if (isset($_GET["confirmar"])) {
                    $contaOBJ->apagar();
                }
            } else {
                header("Location:contas.php");
                exit();
            }
        } else {
            header("Location:contas.php");
            exit();
        }
    } else {
        header("Location:contas.php");
        exit();
    }
}
