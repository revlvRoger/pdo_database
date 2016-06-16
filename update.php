<?php
// require_once('lib.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PDO</title>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="add-form">
            <h1>To Do List</h1>
            <hr>
            <form action="auto-update.php" method="POST">
                <label>Title:</label><br><br>
                <input class="title" type="text" name="todo_title" placeholder="Enter Title"><br><br>
                <label>Description:</label><br><br>
                <textarea rows=10 type="text" name="todo_description" placeholder="Enter Description..."></textarea><br><br>
                <input type="submit" value="Update" name="update">
            </form>
        </div>
    </div>
</div>
<?php
?>
</body>
</html>