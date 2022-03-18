<?php
include("includes/Functions.php");
work_detail($conn);
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
<form method="post" action="forum.php">
    <div class="Project">
        <label for="name_project" class="form-label">project name:</label>
        <input type="text" class="form-control" id="name_project" placeholder="Enter name of the project" name="name_project">
    </div>
    <div class="Client">
        <label for="name_client" class="form-label">Client:</label>
        <input type="text" class="form-control" id="name_client" placeholder="Enter Client name" name="name_client">
    </div>

    <div class="Workload">
        <label for="sel1"></label><select class="form-select" id="sel1" name="task">
            <option>-----select work type-----</option>
            <?php work_type($conn) ?>
        </select>
    </div>

    <div class="Description">
        <label for="description" class="form-label">description:</label>
        <textarea id="description" name="description" rows="7" cols="35">enter the description</textarea>
    </div>


    <div class="Description">
        <label for="comm" class="form-label">comment:</label>
        <textarea id="comm" name="comm" rows="7" cols="35">enter your comment</textarea>
    </div>
    <div class="Add">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>
<div class="row">
    <div class="col-3">
        <div class="mButton1">
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