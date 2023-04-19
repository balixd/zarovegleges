<?php
    session_start();
    require_once 'configDb.php';
    extract($_GET);
    extract($_SESSION);
    
  if(isset($_GET['score']) && isset($_SESSION['username'])){

    $sql="insert into highscore (username,game_name,score) VALUES ('{$username}','snake',{$score})";
  try{
        $stmt=$db->exec($sql);
        echo json_encode(["msg"=>"Teszt"]);
        
    }catch(exception $e){
        echo json_encode(["msg"=>"Sikertelen mentés! {$e}"]);
    }
}
//echo json_encode(["msg"=>"Teszt"]);
?>