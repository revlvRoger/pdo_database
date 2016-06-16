

<?php
require_once('lib.php');
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
            <form action="add.php" method="POST">
                <label>Title:</label><br><br>
                <input type="text" name="todo_title" placeholder="Enter Title..." required="required"><br><br>
                <label>Description:</label><br><br>
                <textarea rows=10 type="text" name="todo_description" placeholder="Enter Description..." required="required"></textarea><br><br>
<!--                 <label>Date:</label><br><br>
                <input type="date" name="date"><br><br> -->
                <input type="submit" value="Add" name="submit">
            </form>
        </div>
    </div>

    <div class="wrapper-right">
    <ul>
        <?php
        //display data
        foreach(displayTODO() as $row ):
        ?>
            <li>
                <?php echo "#". $row['id']?><br><br>
                <span><?php echo  $row['title']?></span><br><br>
                <p><?php echo  $row['description']?></p><br><br>
                <a class="update" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </li>
        <?php
            endforeach;
        ?>
    </ul>
    </div>
</div>
</div>

</body>
</html>