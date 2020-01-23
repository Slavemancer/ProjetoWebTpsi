<?php
include_once("models/user.model.php");
session_start();
switch ($action) {
    case "Registar":
        $user = new User();
        $user->setUsername($data["username"]);
        $user->setEmail($data["email"]);
        $user->setPassword($data["password"]);
        if ($user->isValid()) {
            $user->inserir();
        } else {
            $invalido = true;
        }
        echo "registar";
        break;
    case "Entrar":
        if ($data["password"] == "") {
            $invalido = true;
        } else {
            $user = new User();
            $user->setEmail($data["email"]);
            $user->setPassword($data["password"]);
            $user = $user->login();
            $_SESSION["user_id"] = $user[0]['id'];
            var_dump($_SESSION["user_id"]);
            if (empty($user)) {
                $invalido = true;
            } else {
                header("location:dashboard.php");
            };
        };
        break;
}
