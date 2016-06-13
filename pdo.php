

<?php
$db_connect = new PDO( 'mysql:host=localhost;dbname=todo;charset=utf8mb4', 'root', 'P@ssw0rd' );
$db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $statement = $db_connect->query('SELECT * FROM tasks');
// $results = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($results);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>PDO</title>
</head>
<body>
<div class="wrapper">
    <div class="add-form">
        <form action="" method="POST">
<!--             <label>ID:</label><br><br>
            <input type="text" name="todo_id" placeholder="Enter ID"><br><br> -->
            <label>Title:</label><br><br>
            <input type="text" name="todo_title" placeholder="Enter Title" required="required"><br><br>
            <label>Description:</label><br><br>
            <input type="text" name="todo_description" placeholder="Enter Description" required="required"><br><br>
<!--             <label>Date:</label><br><br>
            <input type="date" name="date"><br><br> -->
            <input type="submit" value="Add" name="submit">
            <input type="reset" value="Reset" name="reset"><br><br>
        </form>
    </div>

    <?php
    if(isset($_POST["submit"]))
    {
        try
        {
        $db = new PDO( 'mysql:host=localhost;dbname=todo;charset=utf8mb4', 'root', 'P@ssw0rd' );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $statement = $db->query('SELECT * FROM tasks');
        // $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($results);


        $sql = "INSERT INTO tasks (title, description) VALUES ('".$_POST["todo_title"]."','".$_POST["todo_description"]."')";
        echo "<br><br>";
        // var_dump($sql);


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
    ?>

    <div class="wrapper-right">
    <ul>
        <?php
        //display data
        $statement = $db_connect->query('SELECT * FROM tasks');
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach( $results as $row ):
        ?>
            <li>
                <?php echo  $row['id']?><br><br>
                <?php echo  $row['title']?><br><br>
                <p><?php echo  $row['description']?></p><br>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
            </li>

        <?php
            endforeach;
        ?>
    </ul>
    </div>
</div>

</body>
</html>