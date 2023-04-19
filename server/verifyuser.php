<?php
    session_start();
    require_once 'configDb.php';
    extract($_GET);
  if(isset($_GET['username'])){
    $sql="select count(*) as nr from users where username='{$username}'";
  try{
        $stmt=$db->query($sql);
        echo json_encode($stmt->fetch());
    }catch(exception $e){
        echo json_encode(["msg"=>"Sikertelen regisztáció! {$e}"]);
    }
}
   // echo json_encode(["nr"=>"0"]);
?>