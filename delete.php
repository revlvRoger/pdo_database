<?php
$db_connect = new PDO( 'mysql:host=localhost;dbname=todo;charset=utf8mb4', 'root', 'P@ssw0rd' );
$db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $event_id=$_GET['id'];
$result = $db_connect->prepare("DELETE FROM tasks WHERE id= :id");
$result->bindParam(':id', $_GET['id']);
$result->execute();
header("location: pdo.php");
exit;