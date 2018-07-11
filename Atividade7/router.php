<?php

// Includes - framework
include './model/Database.php';
include './model/Aluno.php';
include './model/Cidade.php';
include './model/Estado.php';
include './controller/AlunosController.php';
include './controller/CidadesController.php';
include './controller/EstadosController.php';

// Tratamento das rotas
use Controller\AlunosController;
use Controller\CidadesController;
use Controller\EstadosController;

$op = $_GET['op'];

// Definição das rotas
if ( $op == 1 ) {
  $alunoController = new AlunosController;
  $alunoController->listar();
} else if ( $op == 2 ) {
  $cidadeController = new CidadesController;
  $cidadeController->create();
} else if ( $op == 3 ) {
  //var_dump($_POST);
  $cidadeController = new CidadesController;
  $cidadeController->store($_POST);
} else if ( $op == 4 ) {
  $cidadeController = new CidadesController;
  $cidadeController->listar();
}else if ( $op == 5 ) {
  $estadoController = new EstadosController;
  $estadoController->listartodos();
}else if ( $op == 6 ) {
  //var_dump($_POST);
  $cidadeController = new EstadosController;
  $cidadeController->create();
}else if ( $op == 7 ) {
  //var_dump($_POST);
  $estadosController = new EstadosController;
  $estadosController->cadastrar($_POST);
}else if ( $op == 8 ) {
  //var_dump($_POST);
  $alunosController = new AlunosController;
  $alunosController->create();
}else if ( $op == 9 ) {
  //var_dump($_POST);
  $alunosController = new AlunosController;
  $alunosController->cadastrar($_POST);
}
