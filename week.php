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
</head>
<body>
<div class="task_box">
    <div class="monday">
        <?php show_work_mo($conn); ?>
    </div>
    <div class="tuesday">
        <?php show_work_te($conn); ?>
    </div>
    <div class="wednesday">
        <?php show_work_we($conn); ?>
    </div>
    <div class="thursday">
        <?php show_work_th($conn); ?>
    </div>
    <div class="friday">
        <?php show_work_fr($conn); ?>
    </div>
</div>
<div class="mButton2">
    <a href="nav.php"<input type="submit"/>Nav
</div>
</body>
</html>