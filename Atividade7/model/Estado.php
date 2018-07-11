<?php

namespace Model;

use Model\Database;

class Estado {

  protected $db = null;
  private $id;
  private $nome;
  private $sigla;

  public function __construct($nome,$sigla) {
    $this->db = Database::getInstance()->getDB();
    $this->nome=$nome;
    $this->sigla=$sigla;
  }

  public function all() {
    $sql = "SELECT * FROM estados ORDER BY nome";
    return $this->db->query($sql);
  }
  public function save($estado) {
    $sql = $sql = "INSERT INTO estados (nome,sigla)
                VALUES ('$estado->nome','$estado->sigla')";

    //$sql2 = "INSERT INTO cidades (nome,estado_id)
                    //VALUES (:nome,:estado_id)";
    $this->db->query($sql);
    if(!$this){
      echo "Erro! Verifique os dados digitados e tente novamente.";
    }
  }





}
