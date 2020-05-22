<?php

require_once("config.php");

/* Retorna apenas 1 usuario.
$root = new Usuario();

$root->loadByid(3);

echo $root;
*/


/* Retorna todos os dados da tabela
$lista = Usuario::getList();

echo json_encode($lista);
*/


/*
$search = Usuario::search("te");

echo json_encode($search);
*/


/* Autenticação por login e senha
$usuario = new Usuario();

$usuario->login("acesso", "654321");

echo $usuario;
*/

$aluno = new Usuario("aluno", "@lun0");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;


?>