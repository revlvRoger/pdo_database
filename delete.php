<?php
$db_connect = new PDO( 'mysql:host=localhost;dbname=todo;charset=utf8mb4', 'root', 'P@ssw0rd' );
$db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$results = $db_connect->prepare("DELETE FROM tasks WHERE id= :id");
$results->bindParam(':id', $_GET['id']);
$results->execute();
header("location: pdo.php");
exit;