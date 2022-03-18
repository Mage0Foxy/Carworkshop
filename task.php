<?php
include("includes/Functions.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/workshop.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <title>Document</title>
    <div class="Logo"><img src="Images/J&B_Logo.png"></div>
</head>
<body>
<form method="post" action="forum.php">
    <div class="task_box">
        <?php show_work_base($conn) ?>
    </div>

</form>

<div class="row">
    <div class="col-3">
        <div class="mButton2">
            <a href="nav.php"<input type="submit"/>Nav
        </div>
        <div class="mButton2">
            <a href="task.php"<input type="submit"/>Task
        </div>
        <div class="mButton3">
            <a href="employee.php"<input type="submit"/>Employee
        </div>
        <div class="mButton4">
            <a href="week.php"<input type="submit"/>Week
        </div>
    </div>
</div>
</body>
</html>