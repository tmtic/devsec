<?php
session_start();
include('conexao.php');


if(empty($_POST['login']) || empty($_POST['senha'])) {
        header('Location: index.php');
        exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select login from usuarios where login = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);


$row = mysqli_num_rows($result);


if($row > 0) {
        $_SESSION['usuario'] = $usuario;
        header('Location: msg.php');
        exit();
} else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
}