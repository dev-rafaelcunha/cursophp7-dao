<?php

require_once('config.php');

// CHAMA UM USUARIO POR ID SELECIONADO //
// $root = new Usuario();     
// $root->loadById(3);
// echo $root;

// CHAMA TODOS OS ID //
// $lista = Usuario::getList();
// echo json_encode($lista);

// CHAMA A LISTA DE USUÁRIO PELO LOGIN //
// $search = Usuario::search('jo');
// echo json_encode($search);

// CHAMA UM USUÁRIO USANDO O LOGIN E SENHA "VALIDANDO" //
$usuario = new Usuario();
$usuario->login('rafa', '123');
echo $usuario;