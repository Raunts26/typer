<?php


  $file_name = "tulemused.txt";

  $entries = array();

  if(isset($_GET["user"]) && isset($_GET["score"]) && !empty($_GET["user"])) {

    // Salvestan juurde
    $object = new StdClass();
    $object->user = $_GET["user"];
    $object->score = $_GET["score"];


    // Lisan massiivi juurde
    array_push($entries, $object);

    //Teen stringiks
    //$json = json_encode($entries);

    $json = json_encode($entries);


    //Salvestan faili
    file_put_contents($file_name, $json);

  }


  echo(json_encode($entries));


?>
