<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'Pa$$w0rd');
define('DB', 'usuarios');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');