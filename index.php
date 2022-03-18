<?php
include("includes/Functions.php");
login_user($conn);
errors();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/workshop.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <title>Document</title>
    <div class="Logo"><img src="Images/J&B_Logo.png" alt="Null"> </div>
</head>
<body>
<form method="post" action="index.php">
    <div class="Username">
        <label for="username" class="form-label">username:</label>
        <input type="username" class="form-control" id="username" placeholder="Enter username" name="name">
    </div>
    <div class="Password">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="Submit">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>
<a href="nav.php"<input type="submit"/>Nav
</body>
</html>