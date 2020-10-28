<?php

require_once("dbconfig.php");

$email = $_POST["email"];
$name = $_POST["name"];
$pass = $_POST["pass"];

$query = "SELECT * FROM login_flutter WHERE email LIKE '$email'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);

if($data[0]>1){
    echo json_encode("account already exists");
} else {
    $query = "INSERT INTO login_flutter (id, name, email, pass) VALUES (null, '$name', '$email','pass')";
    $res = mysqli_query($conn,$query); 

    if($res){
        echo json_encode("true");
    } else {
        echo json_encode("false");
    }
}

?>