<?php
namespace Model;
use Model\Database;
use DateTime;
use PDO;
class Exame {
  protected $db = null;
  public $id;
  public $user_id;
  public $procedure_id;
  public $date;
  public $create;
  public $update;

  public function __construct($user_id,$procedure_id,$date) {
    $this->db = Database::getInstance()->getDB();
    $dt = new DateTime();
    $data = $dt->format('Y-m-d H:i:s');
    $this->id = 0;
    $this->user_id = $user_id;
    $this->procedure_id = $procedure_id;
    $this->date=$date;
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
  public function atualizar($id,$idp,$date){
    $sql ="UPDATE tests
          SET procedure_id = '$idp',date='$date'
          WHERE id=$id";
    $this->db->query($sql);
  }
  public function atualizar2($id,$date){
    $sql ="UPDATE tests
          SET date='$date'
          WHERE id=$id";
    $this->db->query($sql);
  }

  public function all() {
    $sql = "SELECT * FROM tests";
    return $this->db->query($sql);
  }
  public function listaPaciente($user_id) {
    $sql = "SELECT * FROM users,procedures,tests WHERE users.id=$user_id AND tests.procedure_id=procedures.id";
    return $this->db->query($sql);
  }
  public function listaOp() {
    $sql = "SELECT * FROM users,procedures,tests WHERE users.id=tests.user_id AND tests.procedure_id=procedures.id";
    return $this->db->query($sql);
  }
  public function somaPrice($lista){
    $soma = 0;
    foreach ($lista as $row) {
      $soma=$soma+$row['price'];
    }
    return $soma;
  }
  public function save($test) {
    $sql = $sql = "INSERT INTO tests (user_id,procedure_id,date,created_at,updated_at)
                VALUES ('$test->user_id','$test->procedure_id','$test->date','$test->create','$test->update')";

    //$sql2 = "INSERT INTO cidades (nome,estado_id)
                    //VALUES (:nome,:estado_id)";
    $this->db->query($sql);
  }
 public function delete($id) {
   $id = $id;
   $sql = "DELETE FROM `tests` WHERE `id` = '$id'";
   $this->db->query($sql);
 }
}
