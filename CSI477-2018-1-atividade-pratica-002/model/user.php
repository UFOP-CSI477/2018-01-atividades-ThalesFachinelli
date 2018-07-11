<?php
namespace Model;
use Model\Database;
use DateTime;
use PDO;
class User {
  protected $db = null;
  public $id=0;
  public $nome;
  public $email;
  public $senha;
  public $type;
  public $token;
  public $create;
  public $update;

  public function __construct($nome, $email, $senha) {
    $this->db = Database::getInstance()->getDB();
    $dt = new DateTime();
    $data = $dt->format('Y-m-d H:i:s');
    $this->id = 0;
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->type=3;
    $this->token=4;
    $this->create= $data;
    $this->update = $data;
  }
  public function __construct2($nome, $email, $senha) {
    $dt = new DateTime();
    $dt->format('Y-m-d H:i:s');
    $this->id = $id;
    $this->nome = $nome;
    $this->email = $email;
    $this->type=3;
    $this->create= $dt;
    $this->update = $dt;
  }

  public function atualizar($idr,$nomer,$emailr,$senhar){
    $sql ="UPDATE users
          SET name = '$nomer',email='$emailr', password = '$senhar'
          WHERE id=$idr";
    $this->db->query($sql);
  }

  public function all() {
    $sql = "SELECT * FROM users ORDER BY name";
    return $this->db->query($sql);
    if(!$this){
      echo "Erro! não há usuários cadastrados no momento.";
    }
  }
  public function save($user) {
    $sql = $sql = "INSERT INTO users (name,email,password,type,remember_token,created_at,updated_at)
                VALUES ('$user->nome','$user->email','$user->senha','$user->type','$user->token','$user->create','$user->update')";

    //$sql2 = "INSERT INTO cidades (nome,estado_id)
                    //VALUES (:nome,:estado_id)";
    $this->db->query($sql);
    if(!$this){
      echo "Erro! Verifique os dados digitados e tente novamente.";
    }
  }
 public function delete($idaux) {
   $id = $idaux;
   $sql = "DELETE FROM `users` WHERE `id` = '$id'";
   $result = $this->db->query($sql);
   var_dump($result);
   if(!$this){
     return -1;
   }else {
     return 0;
   }
 }
 public function save2(){
   if($this->id==0){
     $this->insert();
   }else{
     $this->update();
   }
 }
 public function validate($nome,$senhab){
   $login=$nome;
   $senha=$senhab;
   $sql = "SELECT * FROM `users` WHERE `name` = '$login' AND `password`= '$senha'";
   $result = $this->db->query($sql);
   $rows = $result->fetchAll(PDO::FETCH_ASSOC);
   if( !empty($rows) )
   {
     foreach($rows as $output) {
       if ($output['type']== 1) {
         //session_start();
         $_SESSION['id'] = $output['id'];
         $_SESSION['login'] = $login;
         $_SESSION['senha'] = $senha;
         $_SESSION['tipo'] = 1;
         $retorno=1;
         return $retorno;
         //var_dump($retorno);
         //header('location:router.php?op=4');
       }
       else if ($output['type']== 2) {
         $_SESSION['id'] = $output['id'];
         $_SESSION['login'] = $login;
         $_SESSION['senha'] = $senha;
         $_SESSION['tipo'] = 2;
         $retorno=2;
         return $retorno;
         //header('location:operador.php');
       }
       else if ($output['type']== 3) {
         $_SESSION['id'] = $output['id'];
         $_SESSION['login'] = $login;
         $_SESSION['senha'] = $senha;
         $_SESSION['tipo'] = 3;
         $retorno=3;
         return $retorno;
         //header('location:operador.php');
       }
     }
   }
   else{
     $retorno = -1;
       return $retorno;
       }
 }
}
