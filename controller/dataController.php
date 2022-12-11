<?php
require_once './models/data.php';

class DataController{

  static function loadData(){
    $json = new Data;
    $data = $json->getAll();
    return $data;
  }

  static function loadCharacter($id){
    $json = new Data;
    $data = $json->getCharacterById($id);
    return $data;
  }

}