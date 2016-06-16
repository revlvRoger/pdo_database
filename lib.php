<?php


function databaseConnect()
{
    $db_connect = new PDO( 'mysql:host=localhost;dbname=todo;charset=utf8mb4', 'root', 'P@ssw0rd' );
    $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db_connect;
}
function displayTODO()
{
        $statement = databaseConnect()->query('SELECT * FROM tasks');
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
}

function addTODO($sql)
{
    if(isset($_POST["submit"]))
    {
        try
        {
        $db = databaseConnect();
        $sql = "INSERT INTO tasks (title, description) VALUES ('".$_POST["todo_title"]."','".$_POST["todo_description"]."')";
        echo "<br><br>";
            if ($db->query($sql))
            {
            echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
            }
            else
            {
            echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
            }
            $db = null;
        }
        catch(PDOException $e)
        {
        echo $e->getMessage();
        }
    }
    return($sql);
}


function deleteTODO($results)
{
    $results = databaseConnect()->prepare("DELETE FROM tasks WHERE id= :id");
    $results->bindParam(':id', $_GET['id']);
    $results->execute();
}

