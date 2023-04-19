<?php
    session_start();
    require_once "configDb.php";
    extract($_SESSION);
$sql="SELECT username, score FROM `highscore` ORDER BY score DESC LIMIT 1";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>