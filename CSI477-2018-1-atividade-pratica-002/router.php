<?php
// Includes - framework
include './model/Database.php';
include './model/user.php';
include './model/procedimento.php';
include './model/exame.php';
include './controller/UsersController.php';
include './controller/ProcedimentosController.php';
include './controller/ExamesController.php';
// Tratamento das rotas
use Controller\UsersController;
use Controller\ProcedimentosController;
use Controller\ExamesController;
session_start();

if (!isset($_SESSION['login'])){
  $_SESSION['tipo']=4;
};
$op = $_GET['op'];
// Definição das rotas
if ( $op == 0 ) {
  //Valida Login
  $userController = new UsersController();
  $userController->validar($_POST);
}else if ( $op == 1 ) {
  //Chama formulário de cadastro
  $userController = new UsersController();
  $userController->cadastrar();
}else if( $op == 2){
  //Efetuar método de cadastro no banco
  $usersController = new UsersController();
  $usersController->store($_POST);
}else if( $op == 3){
  //chama view de cadastro de usuário para administrador
    $usersController = new UsersController();
    if (($_SESSION['tipo'])!=1){
      header('location:index.php');
    };
    $usersController->adminCadastrar();
}else if( $op == 4){
  //Chamada de listagem de usuários cadastrados
      $usersController = new UsersController();
      $usersController->listarTodos();
}else if( $op == 5){
  //Chamada do método que apresenta a view principal de administrador
      $usersController = new UsersController();
      if (($_SESSION['tipo'])!=1){
        header('location:index.php');
      };
      $usersController->viewAdmin();
}else if( $op == 6){
    //chama a apresentação da view de exclusão
      $usersController = new UsersController();
      if (($_SESSION['tipo'])!=1){
        header('location:index.php');
      };
      $usersController->viewExcluir();
}
else if( $op == 7){
    //chama a função de exclusão
      $usersController = new UsersController();
      $usersController->excluir($_POST);
}else if( $op == 8){
    //chama a função de cadastro para administrador
      $usersController = new UsersController();
      $usersController->cadastrarAdmin($_POST);
}
else if( $op == 9){
    //chama a view de atualização de cadastro de usuário para administrador
      $usersController = new UsersController();
      if (($_SESSION['tipo'])!=1){
        header('location:index.php');
      };
      $usersController->adminAtualiza();
}
else if( $op == 10){
    //chama a view de atualização de cadastro de usuário para administrador
      $usersController = new UsersController();
      $usersController->atualiza($_POST);
}else if( $op == 11){
  //Chamada de listagem de usuários cadastrados
      $usersController = new ProcedimentosController();
      $usersController->listarTodos();
}else if( $op == 12){
  //Chamada de listagem de usuários cadastrados
      $usersController = new ProcedimentosController();
      if (($_SESSION['tipo'])!=1){
        header('location:index.php');
      };
      $usersController->viewExcluir();
}else if( $op == 13){
  //Chamada de listagem de usuários cadastrados
      $usersController = new ProcedimentosController();
      if (($_SESSION['tipo'])!=1){
        header('location:index.php');
      };
      $usersController->viewCadastraradm();
}else if( $op == 14){
  //Chamada de listagem de usuários cadastrados
      $procController = new ProcedimentosController();
      $procController->cadastrarAdm($_POST);
}else if( $op == 15){
  //Chamada de listagem de usuários cadastrados
      $procController = new ProcedimentosController();
      $procController->excluir($_POST);
}else if( $op == 16){
  //Chamada de listagem de usuários cadastrados
      $procController = new ProcedimentosController();
      $procController->atualiza($_POST);
}else if( $op == 17){
  //Chamada de listagem de usuários cadastrados
      $procController = new ProcedimentosController();
      if (($_SESSION['tipo'])!=1){
        header('location:index.php');
      };
      $procController->adminAtualiza();
}else if( $op == 18){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      $procController->listarTodos();
}else if( $op == 19){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      if (($_SESSION['tipo'])!=1){
        header('location:index.php');
      };
      $procController->cadastrar();
}else if( $op == 20){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      $procController->cadastrarAdm($_POST);
}else if( $op == 21){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      if (($_SESSION['tipo'])!=1){
        header('location:index.php');
      };
      $procController->adminAtualiza();
}else if( $op == 22){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      $procController->atualiza($_POST);
}else if( $op == 23){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      $procController->excluir($_POST);
}else if( $op == 24){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      $procController->viewExcluir();
}else if( $op == 25){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      $procController->listar();
}else if( $op == 26){
  //Logout
      session_destroy();
      header('location:index.php');
}else if( $op == 27){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      $procController->cadastrarPac($_POST);
}else if( $op == 28){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      $procController->cadastrarviewpac();
}else if( $op == 29){
  //Chamada de listagem de usuários cadastrados
      $procController = new ProcedimentosController();
      $procController->listarInicial();
}else if( $op == 30){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      if (($_SESSION['tipo'])!=3){
        header('location:index.php');
      };
      $procController->listaPaciente();
}else if( $op == 31){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      if (($_SESSION['tipo'])!=3){
        header('location:index.php');
      };
      $procController->excluirViewPac();
}else if( $op == 32){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      if (($_SESSION['tipo'])!=3){
        header('location:index.php');
      };
      $procController->excluir2($_POST);
}else if( $op == 33){
  //Chamada de listagem de usuários cadastrados
      $procController = new ExamesController();
      if (($_SESSION['tipo'])!=3){
        header('location:index.php');
      };
      $procController->atualizaViewPac();
}else if ($op == 34) {
  $procController = new ExamesController();
  if (($_SESSION['tipo'])!=3){
    header('location:index.php');
  };
  $procController->viewPaciente();
}else if ($op == 35) {
  $procController = new ExamesController();
  if (($_SESSION['tipo'])!=3){
    header('location:index.php');
  };
  $procController->atualiza2($_POST);
}else if( $op == 36){
  //Chamada de listagem de usuários cadastrados
      $procController = new ProcedimentosController();
      if (($_SESSION['tipo'])!=2){
        header('location:index.php');
      };
      $procController->operadorAtualiza();
}else if( $op == 37){
  //Chamada de listagem de usuários cadastrados
      $procController = new ProcedimentosController();
      if (($_SESSION['tipo'])!=2){
        header('location:index.php');
      };
      $procController->atualiza2($_POST);
}else if( $op == 38){
  //Chamada de listagem de usuários cadastrados
  if (($_SESSION['tipo'])!=2){
    header('location:index.php');
  };
      $procController = new ExamesController();
      $procController->listaOperador();
}else if( $op == 39){
  //Chamada de listagem de usuários cadastrados
  if (($_SESSION['tipo'])!=2){
    header('location:index.php');
  };
  $usersController = new UsersController();
  $usersController->viewOperador();
}
