<?php
    session_start();
    require_once 'configDb.php';
    extract($_POST);
   

    $sql="SELECT PASSWORD pwcrypted from users where username='{$username}'";

    try{

    $stmt=$db->query($sql);
        if($stmt->rowCount()==1){
            $row=$stmt->fetch();
            extract($row);
            $isValid=password_verify($password,$pwcrypted);
            if($isValid){
                $_SESSION['username']=$username;
                echo json_encode(["msg"=>"ok"]);
            }else
            echo json_encode(["msg"=>"Hibás felhasznlónév/jelszó"]);
        }else
        echo json_encode(["msg"=>"Hibás felhasználónév"]);
    }catch(exception $e){
        echo json_encode(["msg"=>"Sikertelen regisztáció! {$e}"]);
    }
?>