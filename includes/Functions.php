<?php
    include("DB_conn.php");

    function work_detail($conn){
        if(isset($_POST['submit'])){
            $name_project = $_POST['name_project'];
            $name_client = $_POST['name_client'];
            $task = $_POST['task'];
            $description = $_POST['description'];
            $comm = $_POST['comm'];


            $sql = "Insert into customer (name_project, name_client, task, description, comm)values(:name_project, :name_client, :task, :description, :comm)";
            $stmt = $conn->prepare($sql);
            if(!$stmt){
                header("Location: forum.php!");
                exit();
            } else {
                $stmt->execute(['name_project' => $name_project, 'name_client' => $name_client,'task' => $task, 'description' => $description,'comm' => $comm]);
                header("location: forum.php?add=project");
            }
        }
    }

    function show_work_base($conn){
        $sql = "SELECT * FROM customer WHERE day IS NULL";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $id = $row['id'];
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
            $description = $row['description'];
            $comm = $row['comm'];

            echo"<p id='id_wp'><a href='./insert_info.php?id=$id'>$id</a></p>";
            echo"<p id='np_wp'>$name_project</></p>";
            echo"<p id='nc_wp'>$name_client</p>";
            echo"<p id='ta_wp'>$task</p>";
            echo"<p id='em_wp'>$employee</p>";
            echo"<p id='de_wp'>$description</p>";
            echo"<p id='co_wp'>$comm</p>";
        }
    }

    function add_time($conn){

        if(isset($_POST["submit"])) {
            $id = $_GET['id'];
            $time = $_POST['time'];
            $day = $_POST['day'];

            $sql = "UPDATE customer SET day = :day, time = :time WHERE id = '" .$id. "'";
            $stmt = $conn ->prepare($sql);
            if(!$stmt){
                header("Location: forum.php!");
                exit();
            } else {
                $stmt->execute(['time' => $time, 'day' => $day]);

            }
        }
    }
    function show_work_mo($conn){
        $sql = "SELECT * FROM customer where day = 'monday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];

            echo"<div id='monday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }

    function show_work_te($conn){
        $sql = "SELECT * FROM customer where day = 'tuesday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];

            echo"<div id='tuesday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }

    function show_work_we($conn){
        $sql = "SELECT * FROM customer where day = 'wednesday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];
            echo"<div id='wednesday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }

    function show_work_th($conn){
        $sql = "SELECT * FROM customer where day = 'thursday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];

            echo"<div id='thursday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }

    function show_work_fr($conn){
        $sql = "SELECT * FROM customer where day = 'friday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];

            echo"<div id='friday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }


    function adduser($conn){
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $work_type = $_POST['work_type'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];


                 if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                header("location: add_employee.php?error=invalidlname");
                exit();
                } else if (!preg_match("/^[a-zA-Z0-9]*$/", $password)) {
                header("location: add_employee.php?error=invalidpass");
                exit();
                } else if (!$password == $confirm) {
                header("location: add_employee.php?error=pwdontmatch");
                }else {
                $query = "INSERT INTO employee (name, password, work_type) VALUES(:name, :password, :work_type)";
                $stmt = $conn->prepare($query);
                if(!$stmt){
                    header("location: add_employee.php?error=stmtfailed");
                    exit();
                }else {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->execute(['name' => $name, 'password' => $hashedpwd, 'work_type'=>$work_type]);
                    header("location: add_employee.php?add=user");
                    }
                }
        }
    }
function add(){
    if(isset($_GET['add'])){
        $add = $_GET['add'];
    } else {
        $add = '';
    } switch($add){
        case "user";
            echo "<p id='update'>User added</p>";
            break;

    }
}
function errors(){
    if(isset($_GET['error'])){
        $errors = $_GET['error'];
    }else {
        $errors = '';
    } switch($errors){
        case "stmtfailed";
            echo "<p id='error'>something went wrong</p>";
            break;
        case "invalidusername";
            echo "<p id='error'>enter a valid username</p>";
            break;
        case "wrong_email";
            echo "<p id='error'>enter a valid email</p>";
            break;
        case "wrong_pass";
            echo"<p id='error'>Password invalid</p>";
            break;
        case "wrongusername";
            echo"<p id='error'>wrong username</p>";
            break;
        case "usernametaken";
            echo"<p id='error'>username is already taken</p>";
            break;
        case "wrongpass";
            echo"<p id='error'>wrong password</p>";
            break;
    }
}
    function times($conn){
        $query = "SELECT * FROM times";
        $result = $conn->query($query);

        foreach ($result as $time){
            echo "<option>";
            echo ($time['time']);
            echo "</option>";
        }
    }
    function days($conn){
        $query = "SELECT * FROM day";
        $result = $conn->query($query);

        foreach ($result as $day){
            echo "<option>";
            echo ($day['day']);
            echo "</option>";
        }
    }
    function work_type($conn){
        $query = "SELECT * FROM work_type";
        $result = $conn->query($query);

        foreach ($result as $work){
            echo "<option>";
            echo ($work['work']);
            echo "</option>";
        }
    }
function show_employee($conn){
    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        $name = $row ['name'];
        $work_type = $row ['work_type'];

        echo"<div id='emp'>";
        echo"<p>$name</p>";
        echo"<p>$work_type</p>";
        echo"</div>";
    }
}
function login_user($conn){
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM employee WHERE name = '" . $name . "'";

        $stmt = $conn->query($sql);
        $user = $stmt->fetch();

        if ($user == 0) {
            header("Location: index.php?error=wrong_email");
            exit();
        } else {
            $pwdHashed = $user["password"];
            $checkpwd = password_verify($password, $pwdHashed);

            if ($checkpwd === false) {
                header("Location: index.php?error=wrong_pass");
                exit();
            } else {
                header("Location: nav.php");
                exit();

            }
        }
    }
}

