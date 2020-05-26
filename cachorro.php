<?php
  require_once 'mamiferos.php';
  
  class Cachorro extends Mamiferos{

    public function __construct($cor,$porte){
      $this->cor = $cor;
      $this->porte = $porte;
      echo("O cachorro nasceu! \n");
    }

    public function __destruct(){
      echo("Cachorro morreu! \n");
    }

    public function getCor(){
      return $this->cor;
    }

    public function setCor($cor){
      $this->cor = $cor;
    }

    public function setPatas($patas){
      $this->porte = $patas;
    }

    public function getPatas(){
      return $this->patas;
    }

    public function latir(){
      echo("Ahu! Ahu! \n");
    }

    public function amamentar(){
      echo("Mamando! \n");
    }
  }






?>