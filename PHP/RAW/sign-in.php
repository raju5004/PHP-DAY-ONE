

<!-- Html Block Started from here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="resurces/style.css">
</head>
<body>

    <h4>Register Page</h4>
    <p style = "color: red;"><?php
        if(!empty($err) && isset($err)){
            echo $err;
        }
    ?></p>
    <form action="./sign-in.php" method="POST">
        <input type="text" name="name"> <br>
        <button name="submit_btn">Submit</button>
    </form>
</body>
</html>

<?php
session_start();
$database = [];
$err = "";
if (isset($_REQUEST['submit_btn'])){
    if (empty($name)){
        $err = "Name is required";
    }else{
        array_push($database, $name);
        $_SESSION["db"] = $database;
        header("location : login.php");
    }
}

?>