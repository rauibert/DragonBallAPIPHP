<?php

class Data{
  const URL= "https://rickandmortyapi.com/api/character";

  public function getAll(){
    $data = Data::getAPI();
    $data = $data["results"]; //Apunto a los resultados de todos los personajes
    return $data;
  }

  public function getCharacterById($id){
    return Data::getAPI($id);
  }

  public function getAPI($id=""){
    $sesion = curl_init();
    curl_setopt($sesion, CURLOPT_URL, Data::URL."/".$id);
    curl_setopt($sesion, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($sesion); //Obtenemos un json
    $data = json_decode($json, true); //Tratamos el json y lo hacemos un array
    return $data;
  }

}