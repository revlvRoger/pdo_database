

  <?php
    if(isset($_POST["submit"]))
    {
        try
        {
        $db = new PDO( 'mysql:host=localhost;dbname=todo;charset=utf8mb4', 'root', 'P@ssw0rd' );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


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

header("location: pdo.php");
exit;
    ?>