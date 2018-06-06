<?php
namespace Model;
use Model\Database;
use DateTime;
use PDO;
class Procedimento {
  protected $db = null;
  public $id;
  public $nome;
  public $preco;
  public $user_id;
  public $create;
  public $update;

  public function __construct($nome, $preco, $user_id) {
    $this->db = Database::getInstance()->getDB();
    $dt = new DateTime();
    $data = $dt->format('Y-m-d H:i:s');
    $this->id = 0;
    $this->nome = $nome;
    $this->preco = $preco;
    $this->user_id = $user_id;
    $this->create= $data;
    $this->update = $data;
  }

  public function setNome($nome){
    $this->nome= $nome;
  }

  public function setEstadoid($estado_id){
    $this->estado_id=$estado_id;
  }

  public function set($nome){
    $this->nome= $nome;
  }
  public function atualizar($id,$nome,$valor){
    $sql ="UPDATE procedures
          SET name = '$nome',price='$valor'
          WHERE id=$id";
    $this->db->query($sql);
  }

  public function all() {
    $sql = "SELECT * FROM procedures ORDER BY name";
    return $this->db->query($sql);
  }
  public function save($proc) {
    $sql = $sql = "INSERT INTO procedures (name,price,user_id,created_at,updated_at)
                VALUES ('$proc->nome','$proc->preco','$proc->user_id','$proc->create','$proc->update')";

    //$sql2 = "INSERT INTO cidades (nome,estado_id)
                    //VALUES (:nome,:estado_id)";
    $this->db->query($sql);
  }
 public function update() {
 }
 public function delete($id) {
   $id = $id;
   $sql = "DELETE FROM `procedures` WHERE `id` = '$id'";
   $result = $this->db->query($sql);
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
         //$_SESSION['login'] = $login;
         //$_SESSION['senha'] = $senha;
         $retorno=1;
         return $retorno;
         //var_dump($retorno);
         //header('location:router.php?op=4');
       }
       else if ($output['type']== 2) {
         $_SESSION['login'] = $login;
         $_SESSION['senha'] = $senha;
         //header('location:operador.php');
       }
     }
   }
   else{
       unset ($_SESSION['login']);
       unset ($_SESSION['senha']);
       header('location:nao.php');

       }
 }
}
