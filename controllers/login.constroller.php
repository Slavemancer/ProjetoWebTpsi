<?php
$invalido = false;
if (isset($_POST["registar"])) {
    $user = new User();
    $user->setUsername($_POST["username"]);
    $user->setEmail($_POST["email"]);
    $user->setPassword($_POST["password"]);
    if ($user->isValid()) {
        $user->inserir();
    } else {
        $invalido = true;
    }
}
