<?php
// $dbh = new PDO('odbc:sample', 'db2inst1', 'ibmdb2');

// /* Delete all rows from the FRUIT table */
// $count = $dbh->exec("DELETE FROM fruit WHERE colour = 'red'");

// /* Return number of rows that were deleted */
// print("Deleted $count rows.\n");


// $db_connect = new PDO( 'mysql:host=localhost;dbname=todo;charset=utf8mb4', 'root', 'P@ssw0rd' );
// $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $statement = $db_connect->query('SELECT * FROM tasks');
// /* Delete all rows from the FRUIT table */
// $count = $db_connect->exec("DELETE FROM tasks WHERE id = ");


// $sql = "DELETE FROM tasks WHERE id =  :id";
// $stmt = $db_connect->prepare($sql);
// $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
// $stmt->execute();