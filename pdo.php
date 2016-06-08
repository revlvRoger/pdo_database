
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="normalize.css">
</head>

<?php
$db = new PDO( 'mysql:host=localhost;dbname=todo;charset=utf8mb4', 'root', 'P@ssw0rd' );
$statement = $db->query('SELECT * FROM tasks');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
    <header>
        <div class="head-wrapper">
        <h1>PDO Database</h1>
        </div>
    </header>


<div class="container">
    <div class="wrapper">
        <div class="wrapper-left">
            <form>
                <label for="title">Title:</label><br>
                <input type="text" name="title" placeholder="Title">
                <label for="description">Description:</label><br>
                <textarea type="text" name="description" placeholder="Description"></textarea>
                <input type="submit">
            </form>
        </div>
    </div>

    <div class="wrapper-right">
        <table border="2" width="100%">
            <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>

        </tr>
        <?php
            foreach( $results as $row ):
                echo "<tr><td>";
                echo $row['id'];
                echo "</td><td>";
                echo $row['title'];
                echo "</td><td>";
                echo $row['description'];
                echo "</td>";
                echo "</tr>";
            endforeach;
        ?>
        </table>
    </div>
</div>
 </body>
</html>