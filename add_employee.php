<?php
include("includes/Functions.php");
adduser($conn);
errors();
add();
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
</head>
<body>
<form class="" action="add_employee.php" method="post">
    <form method="post" action="add_employee.php">
        <div class="Username_add">
            <label for="username" class="form-label">username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="name">
        </div>
        <div class="work_employee">
            <label for="work_type" class="form-label">specialization:</label>
            <input type="text" class="work_type" id="work_type" placeholder="specialization" name="work_type">
        </div>
        <div class="Password_add">
            <label for="pwd" class="form-label">Password:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="Password_confirm">
            <label for="pwdc" class="form-label">confirm Password:</label>
            <input type="text" class="form-control" id="pwdc" placeholder="Enter password again" name="confirm">
        </div>
        <div class="Add">
            <button type="submit" class="btn btn-primary" name="submit">add</button>
        </div>
    </form>
    <div class="mButton2">
        <a href="employee.php"<input type="submit"/>Employee
    </div>
</body>
</html>